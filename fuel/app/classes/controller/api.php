<?php

class Controller_Api extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Api &raquo; Index';
		$this->template->content = View::forge('api/index', $data);
	}
	
	public function action_projectlist()
	{
	    header('Access-Control-Allow-Origin: *');
	    
	    $result = DB::query("SELECT * FROM projects")->as_object()->execute();
		if($result[0]  == false){

			$res = ['check'=> 'nodata'];
			echo json_encode($res);
		}
		else{
				
			$array = [] ; 
			$count = 0 ;
			foreach($result as $item)
			{
				

				$res = ['id'=> $item->id,
						'name'=>	$item->name,
						'address'=>$item->client_address,
						'pm'=>$item->project_manager,
					   ];
					//$res = ['check'=> 'nodata'];
				 	
				   		
				$array[$count] = $res ; 
				$count++ ;


					
			}
			echo json_encode($array) ;die;
		
		}
	    return View::forge('test/test',false);
	}
	
	public function action_issuelist()
	{
	    header('Access-Control-Allow-Origin: *');
	    
	    $result = DB::query("SELECT * FROM issues")->as_object()->execute();
		if($result[0]  == false){

			$res = ['check'=> 'nodata'];
			echo json_encode($res);
		}
		else{
				
			$array = [] ; 
			$count = 0 ;
			foreach($result as $item)
			{
				

				$res = ['id'=> $item->id,
						'problem'=>	$item->problem,
						'status'=>$item->status,
						'module'=>$item->module,
						'solution'=>$item->solution,
						'reported_by'=>$item->reported_by,
					   ];
					//$res = ['check'=> 'nodata'];
				 	
				   		
				$array[$count] = $res ; 
				$count++ ;


					
			}
			echo json_encode($array) ;die;
		
		}
	    return View::forge('test/test',false);
	}	
	public function action_tasklist()
	{
	    header('Access-Control-Allow-Origin: *');
	    
	    $result = DB::query("SELECT * FROM tasks")->as_object()->execute();
		if($result[0]  == false){

			$res = ['check'=> 'nodata'];
			echo json_encode($res);
		}
		else{
				
			$array = [] ; 
			$count = 0 ;
			foreach($result as $item)
			{
				

				$res = ['id'=> $item->id,
						'name'=>	$item->name,
						'duration'=>$item->duration,
						'activity_id'=>$item->activity_id,
					
					   ];
					//$res = ['check'=> 'nodata'];
				 	
				   		
				$array[$count] = $res ; 
				$count++ ;
			}
			echo json_encode($array) ;die;
		
		}
	    return View::forge('test/test',false);
	}	
	
	public function action_memberlist()
	{
	    header('Access-Control-Allow-Origin: *');
	    $result = DB::query("SELECT * FROM userprofiles")->as_object()->execute();
		if($result[0]  == false){

			$res = ['check'=> 'nodata'];
			echo json_encode($res);
		}
		else{
				
			$array = [] ; 
			$count = 0 ;
			foreach($result as $item)
			{
				

				$res = ['id'=> $item->id,
						'fullname'=>	$item->first_name.''.$item->surname,
						'phone'=>$item->phone_number,
						'email'=>$item->email,
						'department'=>$item->department,
					
					   ];
					//$res = ['check'=> 'nodata'];
				 	
				   		
				$array[$count] = $res ; 
				$count++ ;


					
			}
			echo json_encode($array) ;die;
		
		}
	    return View::forge('test/test',false);
	}

}
