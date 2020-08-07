<?php
class Controller_Projecttype extends Controller_Template
{

	public function action_index()
	{
		$data['projecttypes'] = Model_Projecttype::find_all();
		$this->template->title = "Projecttypes";
		$this->template->content = View::forge('projecttype/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('projecttype');

		$data['projecttype'] = Model_Projecttype::find_by_pk($id);

		$this->template->title = "Projecttype";
		$this->template->content = View::forge('projecttype/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Projecttype::validate('create');

			if ($val->run())
			{
				$projecttype = Model_Projecttype::forge(array(
					'name' => Input::post('name'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				if ($projecttype and $projecttype->save())
				{
					Session::set_flash('success', 'Added projecttype #'.$projecttype->id.'.');
					Response::redirect('projecttype');
				}
				else
				{
					Session::set_flash('error', 'Could not save projecttype.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Projecttypes";
		$this->template->content = View::forge('projecttype/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('projecttype');

		$projecttype = Model_Projecttype::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Projecttype::validate('edit');

			if ($val->run())
			{
				$projecttype->name = Input::post('name');

				if ($projecttype->save())
				{
					Session::set_flash('success', 'Updated projecttype #'.$id);
					Response::redirect('projecttype');
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

		$this->template->set_global('projecttype', $projecttype, false);
		$this->template->title = "Projecttypes";
		$this->template->content = View::forge('projecttype/edit');

	}

	public function action_delete($id = null)
	{
		if ($projecttype = Model_Projecttype::find_one_by_id($id))
		{
			$projecttype->delete();

			Session::set_flash('success', 'Deleted projecttype #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete projecttype #'.$id);
		}

		Response::redirect('projecttype');

	}

}
