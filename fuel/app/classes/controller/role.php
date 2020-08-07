<?php
class Controller_Role extends Controller_Template
{

	public function action_index()
	{
		$data['roles'] = Model_Role::find_all();
		$this->template->title = "Roles";
		$this->template->content = View::forge('role/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('role');

		$data['role'] = Model_Role::find_by_pk($id);

		$this->template->title = "Role";
		$this->template->content = View::forge('role/view', $data);

	}
	public function action_demo()
	{
		if (Input::method() == 'POST')
		{
			$role = Model_Userprofile::find_one_by_id(Session::get('userid'));
			$role->position = Input::post('module');
			if($role->save()){
				Session::set_flash('success', 'Roles have been modified successfully');
			}
			//Debug::dump($role);die;
		}
		$this->template->title = "Role based access demonstration";
		$this->template->content = View::forge('role/demo', null);
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Role::validate('create');

			if ($val->run())
			{
				$role = Model_Role::forge(array(
					'name' => Input::post('name'),
				));

				if ($role and $role->save())
				{
					Session::set_flash('success', 'Added role #'.$role->id.'.');
					Response::redirect('role');
				}
				else
				{
					Session::set_flash('error', 'Could not save role.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Roles";
		$this->template->content = View::forge('role/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('role');

		$role = Model_Role::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Role::validate('edit');

			if ($val->run())
			{
				$role->name = Input::post('name');

				if ($role->save())
				{
					Session::set_flash('success', 'Updated role #'.$id);
					Response::redirect('role');
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

		$this->template->set_global('role', $role, false);
		$this->template->title = "Roles";
		$this->template->content = View::forge('role/edit');

	}

	public function action_delete($id = null)
	{
		if ($role = Model_Role::find_one_by_id($id))
		{
			$role->delete();

			Session::set_flash('success', 'Deleted role #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete role #'.$id);
		}

		Response::redirect('role');

	}

}
