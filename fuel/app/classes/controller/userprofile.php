<?php
class Controller_Userprofile extends Controller_Template
{

	public function action_index()
	{
		$data['userprofiles'] = Model_Userprofile::find_all();
		$this->template->title = "Userprofiles";
		$this->template->content = View::forge('userprofile/index', $data);

	}
	public function action_activate($id = null ,$activated = null)
	{
		$data['users'] = null ;
		if($id == null && $activated == null){
		$data['users']  = DB::select()->from('users')->as_object()->execute();
     	}
     	else{
     		$value = null ;
     		$activated == 0 ? $value = 1 : $value = 0 ;
     		$result = DB::update('users')
		    ->value("isactivated", $value)
		    ->where('id', '=', $id)
		    ->execute();
		    if($result){
		    	Session::set_flash('success', 'Operation successfull');
				Response::redirect('userprofile/activate');
		    }else{
		    	Session::set_flash('success', 'Operation failed');
				Response::redirect('userprofile/activate');
		    }
     	}

		$this->template->title = "Activate Users";
		$this->template->content = View::forge('userprofile/activate', $data);

	}
	 
	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('userprofile');

		$data['userprofile'] = Model_Userprofile::find_by_pk($id);

		$this->template->title = "Userprofile";
		$this->template->content = View::forge('userprofile/activate', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Userprofile::validate('create');

			if ($val->run())
			{
				$userprofile = Model_Userprofile::forge(array(
					'user_id' => Input::post('user_id'),
					'first_name' => Input::post('first_name'),
					'surname' => Input::post('surname'),
					'email' => Input::post('email'),
					'phone_number' => Input::post('phone_number'),
					'position' => Input::post('position'),
					'department' => Input::post('department'),
				));

				if ($userprofile and $userprofile->save())
				{
					Session::set_flash('success', 'Added userprofile #'.$userprofile->id.'.');
					Response::redirect('userprofile');
				}
				else
				{
					Session::set_flash('error', 'Could not save userprofile.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Userprofiles";
		$this->template->content = View::forge('userprofile/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('userprofile');

		$userprofile = Model_Userprofile::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Userprofile::validate('edit');

			if ($val->run())
			{
				$userprofile->user_id = Input::post('user_id');
				$userprofile->first_name = Input::post('first_name');
				$userprofile->surname = Input::post('surname');
				$userprofile->email = Input::post('email');
				$userprofile->phone_number = Input::post('phone_number');
				$userprofile->position = Input::post('position');
				$userprofile->department = Input::post('department');

				if ($userprofile->save())
				{
					Session::set_flash('success', 'Updated userprofile #'.$id);
					Response::redirect('userprofile');
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

		$this->template->set_global('userprofile', $userprofile, false);
		$this->template->title = "Userprofiles";
		$this->template->content = View::forge('userprofile/edit');

	}
	public function action_update()
	{
		$oldpass = Input::post('oldpass');
		$newpass = Input::post('newpass');
		$password =  Input::post('password');
		if(Input::method() == 'POST'){

			if ($newpass != $password) {
				Session::set_flash('error' , 'Passwords did not match');
				
			}
			else{
				if(Auth::change_password($oldpass,$password)){
					Session::set_flash('success' , 'Password Updated ');
					Response::redirect('userprofile/update');
				}
				else{
					Session::set_flash('error' , 'Incorrect Current Password entered  ');
				}
			}

			

		}

		$this->template->title = "Users";
		$this->template->content = View::forge('user/change',null);

	}

	public function action_delete($id = null)
	{
		if ($userprofile = Model_Userprofile::find_one_by_id($id))
		{
			$userprofile->delete();

			Session::set_flash('success', 'Deleted userprofile #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete userprofile #'.$id);
		}

		Response::redirect('userprofile');

	}

}
