<?php

class Controller_Dashboard extends Controller_Template
{

	public function action_index($id = null)
	{

		$arr = [] ;
		if($id == null){
			
			$arr[0] = ['label' => 'Human Resources Module' ,	'y'=> 6 ] ; 
			$arr[1] = ['label' => 'Marketing Module' , 
			'y'=> 10 ] ; 

			$arr[2] = ['label' => 'Technical Module', 
			'y'=> 7 ] ; 

			$arr[3] = ['label' => 'Financial Accounting Module', 
			'y'=> 5 ] ; 
			Session::set('test', $arr);
		}else{


				//Debug::dump($id);die;

			$project = Model_Project::find_one_by_id($id);
			$projectname = $project->name ;

			$activity_ids = Model_Activity::find(array('where'=>array('project'=>$projectname)));

			
			

			 
			$x = 0 ;
			$y = 0 ;
			foreach($activity_ids as $activity_id)
			{
				$activityname = $activity_id->name ; 
				$done = "select count(*) as rcrds from tasks where activity_id = ".$activity_id->id."  AND done = 'true' ";
													$query = DB::query($done)->execute()->as_array();
													$rcds = $query[0]['rcrds'] ;


				$donenum = $rcds ;

				$done = "select count(*) as rcrds from tasks where activity_id = ".$activity_id->id."   ";
													$query = DB::query($done)->execute()->as_array();
													$rcds = $query[0]['rcrds'] ;
				
				$totnum =  $rcds ;

							$final = 0 ;
							try{
								$final = $totnum - $donenum ;
							}catch(exception $e){

								$final  = 0  ;
							}
							
							

				$arr[$x] = ['label' => $activityname.' pending task(s)' , 
							'y'=> $final ] ; 
				

				$x++ ; 
				


				
			}
			//Debug::dump($arr);die;
			Session::set('test', $arr );
		}
		
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Dashboard';
		$this->template->content = View::forge('dashboard/dashboard', $data);
	}


}
