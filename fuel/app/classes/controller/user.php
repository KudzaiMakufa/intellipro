<?php
class Controller_User extends Controller_Template
{
	public $template = 'landing_page';
	public function action_register()
	{

        
        // create a new user
        Auth::create_user(
            'promisemakufa',
            'pass123',
            'admin@admin.com',
            1,
            array(
                'fullname' => 'P K systems',
            )
        );

        $this->template->title = "User";
        $this->template->content = View::forge('user/register');
    }
    public function action_create()
	{
		if (Input::method() == 'POST')
		{
			
		
			$val = Model_Userprofile::validate('create');

			if(!Custom::phonenumval(Input::post('phone_number'))){
				Session::set_flash('error', 'Invalid  Phone Number ');
				Response::redirect('login');
			}
			

			if ($val->run() )
			{
				

				if(Input::post('password') == Input::post('confirm')){

					 // create a new user
						
					try{	
					 	$user = Auth::create_user(
						Input::post('phone_number'),
						Input::post('password'),
						Input::post('email'),
						0,
						1,
						array(
							'department' => Input::post('department'),
							 'role' => 'universal',
						)	
						);

						$profile = Model_Userprofile::forge(array(
						'user_id' => $user,
						'first_name' => Input::post('first_name'),
						'surname' => Input::post('surname'),
						'email' => Input::post('email'),
						'phone_number' => Input::post('phone_number'),
						'position' => Input::post('position'),
						'department' => Input::post('department'),
						
						'created_at' => time(),
						'updated_at' =>'0' ,

						));

						if($user && $profile->save() )
						{

						
							Session::set_flash('success', 'Registration complete ,Awaiting approval by Admin ');
							Response::redirect('login');
						
						}
						else
						{
							Session::set_flash('error', 'Could not create user account');
						}

					}
					catch (\SimpleUserUpdateException $e)
					{
						// duplicate email address
						if ($e->getCode() == 2)
						{
							Session::set_flash('error',('email already exists'));
						}

						// duplicate username
						elseif ($e->getCode() == 3)
						{
							Session::set_flash('error',('Phone number already exists'));
						}

						// this can't happen, but you'll never know...
						else
						{

							Session::set_flash('error',$e->getMessage());
						}
					}

			

				}
				else{

					Session::set_flash('error', 'Passwords do not match ');
					
				}


				
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Member Registration";
		$this->template->content = View::forge('user/create');

	}
	

	public function action_logout()
	{

			Auth::logout();
				Session::set_flash('success', 'You have been logged off ');
				Response::redirect('login');
		

        $this->template->title = "User";
        $this->template->content = View::forge('test/test');
    }

 
}