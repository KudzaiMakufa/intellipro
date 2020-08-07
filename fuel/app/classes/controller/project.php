<?php
class Controller_Project extends Controller_Template
{

	public function action_index()
	{
		$data['projects'] = Model_Project::find(array('order_by'=>array('id'=>'desc')));
		$this->template->title = "Projects";
		$this->template->content = View::forge('project/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('project');

		$data['project'] = Model_Project::find_by_pk($id);

		$this->template->title = "Project";
		$this->template->content = View::forge('project/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{

			$date = new DateTime(Input::post('start_date'));
			$now = new DateTime();
			if(($date < $now)){
				Session::set_flash('error', 'Select future date ');
				Response::redirect('project/create');
			}
		
			$val = Model_Project::validate('create');

			if ($val->run())
			{
				$project = Model_Project::forge(array(
					'name' => Input::post('name'),
					'ongoing'=>1,
					'start_date' => Input::post('start_date'),
					'client_name' => Input::post('client_name'),
					'client_address' => Input::post('client_address'),
					'project_type' => Input::post('project_type'),
					'project_manager' => Input::post('project_manager'),
					'completion_date' => Input::post('completion_date'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				if ($project and $project->save())
				{
					Session::set_flash('success', 'Added project #'.$project->id.'.');
					Response::redirect('activity/create');
				}
				else
				{
					Session::set_flash('error', 'Could not save project.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Projects";
		$this->template->content = View::forge('project/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('project');

		$project = Model_Project::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Project::validate('edit');

			if ($val->run())
			{
				$project->name = Input::post('name');
				$project->start_date = Input::post('start_date');
				$project->client_name = Input::post('client_name');
				$project->client_address = Input::post('client_address');
				$project->project_type = Input::post('project_type');
				$project->project_manager = Input::post('project_manager');
				$project->completion_date = Input::post('completion_date');

				if ($project->save())
				{
					Session::set_flash('success', 'Updated project #'.$id);
					Response::redirect('project');
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

		$this->template->set_global('project', $project, false);
		$this->template->title = "Projects";
		$this->template->content = View::forge('project/edit');

	}

	public function action_delete($id = null)
	{
		if ($project = Model_Project::find_one_by_id($id))
		{
			$project->delete();

			Session::set_flash('success', 'Deleted project #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete project #'.$id);
		}

		Response::redirect('project');

	}

}
