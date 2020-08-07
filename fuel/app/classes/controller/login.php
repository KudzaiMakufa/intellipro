<?php
class Controller_Login extends Controller_Template
{
	public $template = 'landing_page';

	public function action_index()														
	{ 
		

		if (Input::method() == 'POST')
		{
			$username = Input::post('username');
			$password = Input::post('password');

			if($username == '' || $password == '' ){
				Session::set_flash('error', 'Fill in all fields ');
			}

			
			$username = Input::post('username');
			$password = Input::post('password');


			if (Auth::login($username, $password))
			{
					list(, $userid) = Auth::get_user_id();
					$isactivated = DB::select('isactivated')->from('users')->where('id', '=', $userid)->as_object()->execute(); 

					if($isactivated[0]->isactivated == 1){


						$rolename = Auth::get_profile_fields('role') ;
						if($rolename == 'universal'){
							Response::redirect('dashboard');
						}
						else{
							Session::set_flash('error', 'defined role does not have access to system ');
							Response::redirect('login');

						}
					}
					else{
						Session::set_flash('error', 'Your account is not enrolled in  current projects .Awaiting activation by Admin ');
						Response::redirect('login');
					}
				
			}
			else{
				Session::set_flash('error', 'Incorrect Username or Password');
			}
				
		
			

		
	}
	$this->template->title = "User Login";
	$this->template->content = View::forge('user/guest_form');
	
	}	

	public function action_mobile($email = null,$pass = null)														
	{ 
		

             header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, POST, DELETE, OPTIONS");
		header('Access-Control-Max-Age: 86400');
		header("Access-Control-Expose-Headers: Content-Length, X-JSON");
		header("Access-Control-Allow-Headers: *");

			if (Auth::login($email, $pass))
			{
					list(, $userid) = Auth::get_user_id();
					$res = ['check'=> 'true','userid'=> $userid];
					echo json_encode($res);
				
			}
			else{
				$res = ['check'=> 'failed'];
				echo json_encode($res);
			}
				
		
			

		
		return View::forge('test/test',false);
	
	}	

}
