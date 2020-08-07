<?php
class Controller_Department extends Controller_Template
{

	public function action_index()
	{
		$data['departments'] = Model_Department::find_all();
		$this->template->title = "Departments";
		$this->template->content = View::forge('department/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('department');

		$data['department'] = Model_Department::find_by_pk($id);

		$this->template->title = "Department";
		$this->template->content = View::forge('department/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Department::validate('create');

			if ($val->run())
			{
				$department = Model_Department::forge(array(
					'name' => Input::post('name'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				if ($department and $department->save())
				{
					Session::set_flash('success', 'Added department #'.$department->id.'.');
					Response::redirect('department');
				}
				else
				{
					Session::set_flash('error', 'Could not save department.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Departments";
		$this->template->content = View::forge('department/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('department');

		$department = Model_Department::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Department::validate('edit');

			if ($val->run())
			{
				$department->name = Input::post('name');

				if ($department->save())
				{
					Session::set_flash('success', 'Updated department #'.$id);
					Response::redirect('department');
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

		$this->template->set_global('department', $department, false);
		$this->template->title = "Departments";
		$this->template->content = View::forge('department/edit');

	}

	public function action_delete($id = null)
	{
		if ($department = Model_Department::find_one_by_id($id))
		{
			$department->delete();

			Session::set_flash('success', 'Deleted department #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete department #'.$id);
		}

		Response::redirect('department');

	}

}
