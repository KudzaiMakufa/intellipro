<?php
class Controller_Activity extends Controller_Template
{

	public function action_index()
	{
		

		$data['activities'] = Model_Activity::find(array('order_by'=>array('id'=>'desc')));
		
		$this->template->title = "Activities";
		$this->template->content = View::forge('activity/index', $data);

	}

	public function action_task($id = null)
	{
		is_null($id) and Response::redirect('activity');

		$data['activity'] = Model_Activity::find_by_pk($id);

		$this->template->title = "Activity";
		$this->template->content = View::forge('activity/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Activity::validate('create');

			if ($val->run())
			{
				$activity = Model_Activity::forge(array(
					'name' => Input::post('name'),
					'project' => Input::post('project'),
					'sequence_no' => Input::post('sequence_no'),
					'number_of_members' => Input::post('number_of_members'),
					'optimal_completion' => Input::post('optimal_completion'),
					'quickest_completion' => Input::post('quickest_completion'),
					'late_competion' => Input::post('late_competion'),
					'decided_completion' => 0,
					'totalcost' => Input::post('totalcost'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				if ($activity and $activity->save())
				{
					Session::set_flash('success', 'Added activity #'.$activity->id.'.');
					Response::redirect('task/index');
				}
				else
				{
					Session::set_flash('error', 'Could not save activity.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Activities";
		$this->template->content = View::forge('activity/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('activity');

		$activity = Model_Activity::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Activity::validate('edit');

			if ($val->run())
			{
				$activity->name = Input::post('name');
				$activity->project = Input::post('project');
				$activity->sequence_no = Input::post('sequence_no');
				$activity->number_of_members = Input::post('number_of_members');
				$activity->optimal_completion = Input::post('optimal_completion');
				$activity->quickest_completion = Input::post('quickest_completion');
				$activity->late_competion = Input::post('late_competion');
				$activity->totalcost = Input::post('totalcost');

				if ($activity->save())
				{
					Session::set_flash('success', 'Updated activity #'.$id);
					Response::redirect('activity');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('activity', $activity, false);
		$this->template->title = "Activities";
		$this->template->content = View::forge('activity/edit');

	}

	public function action_delete($id = null)
	{
		if ($activity = Model_Activity::find_one_by_id($id))
		{
			$activity->delete();

			Session::set_flash('success', 'Deleted activity #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete activity #'.$id);
		}

		Response::redirect('activity');

	}

}
