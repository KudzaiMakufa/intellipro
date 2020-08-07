<?php


class Custom
{

	public static function getregnum($userid)
	{

	
		$user = DB::query("SELECT * FROM users where id = '".$userid."' ")->as_object()->execute();
		$username = $user[0]->username;
		
	
		//Debug::dump($username);die;
		return $username; 
		
	}
	public static function regnumval($regnumber)
	{
		
		$pass = false ;

		if(strlen($regnumber) == 8)
		{
			//first letter is is H 

			if($regnumber[0] == "H")
			{
				//last character is a letter 
				if(ctype_alpha($regnumber[-1]))
				{
					//drop H and last letter 
					
					$midsection  = substr($regnumber, 1, -1);

					if(is_numeric($midsection))
					{
						$pass = true ;
					}
				}
			}
			
			

		}

		return $pass ;

	}
	public static function phonenumval($phone)
	{
		
		$pass = false ;

		if(strlen($phone) == 10 || strlen($phone) == 13 )
		{
		
			

			if(strlen($phone) == 13)
			{
				
				//strip +263
				$fon = str_replace("+263","0" ,$phone) ;
				
				if($fon[0] == "0")
				{
					
				
					if(is_numeric($fon) &&  strlen($fon) == 10)
					{
						$pass = true ;
					}
				}	

			}else
			{
				if(is_numeric($phone) )
					{
						$pass = true ;
					}
			}
			
			

		}
		
		
		return $pass ;

	}
	public static function getuserid()
	{
	
		 list(, $userid) = Auth::get_user_id(); 
		 
		if($userid == 0){
		 return  ;
		}

		return $userid; 
		
	}
	public static function getusertype($userid)
	{
		if($userid == 0){
			Session::set_flash('error','you must login in first');
			Response::redirect('auth/login') ;
		 }
		$user = DB::query("SELECT * FROM users where id = '".$userid."' ")->as_object()->execute();
		$usertype = $user[0]->usertype;
		
	
		//Debug::dump($username);die;
		return $usertype;
	}
	public static function getlecturers(){
		$school = Model_Usertype::find(array('where'=>array('type'=>'lecturer')));
					
		// $school = DB::query("SELECT * FROM usertypes where 'type' = 'lecturer' ")->as_object()->execute();
		$arr=array('0'=>'--Please Select Supervisor--');
		

		foreach ($school as $item) {
			$user = DB::query("SELECT * FROM users where id = '".$item->userid."' ")->as_object()->execute();
			$fullname = unserialize($user[0]->profile_fields)['firstname'].' '.$lastname = unserialize($user[0]->profile_fields)['lastname'];
			
			$arr[$fullname] = $fullname;
		}
		return $arr ;
	}
	public static function getstudentfullname(){
		$school = Model_Usertype::find(array('where'=>array('type'=>'student')));
					
		// $school = DB::query("SELECT * FROM usertypes where 'type' = 'lecturer' ")->as_object()->execute();
		$arr=array('0'=>'--Please Select Student --');
		

		foreach ($school as $item) {
			$user = DB::query("SELECT * FROM users where id = '".$item->userid."' ")->as_object()->execute();
			$fullname = unserialize($user[0]->profile_fields)['firstname'].' '.unserialize($user[0]->profile_fields)['lastname'].' '.$user[0]->username;
			
			$arr[$fullname] = $fullname;
		}
		return $arr ;
	}

}
