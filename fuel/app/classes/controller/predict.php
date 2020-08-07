<?php

class Controller_Predict extends Controller_Template
{

	public function action_index($id = null)
	{
		$data['activities'] = null ;
		if(Input::method() == 'POST'){
			//Debug::dump(Session::get('projectname'));die;
			//Debug::dump(Input::post());die;
			$activities  = Model_Activity::find(array('where'=>array('project'=>Session::get('projectname'))));
		

			foreach ($activities as $item) 
			{
			// 	Debug::dump($item->name);
			// 	Debug::dump(Input::post(''.$item->id));die;

			// 		//Debug::dump(Input::post($item->id));
				
				 $item->decided_completion =  Input::post($item->id);
				 $item->save();
			
			}
				Session::set_flash('success','Successfully stored completion dates for each activity ');
				Response::redirect('issue');
			
			
		}
		else{

			// Session::set_flash('error',"Server has been intentionally  deactivated for machine learning operations by the developer due to being resource exhaustive on live server   \n Works on local copy ");
			// 	Response::redirect('predict/choose');
			
			$project_id = Model_Project::find_one_by_id($id);

			$data['activities'] = Model_Activity::find(array('where'=>array('project'=>$project_id->name)));
			if($data['activities'] == null ){
					Session::set_flash('error','Cannot perfom prediction on a project without activities ,add activities first ');
				Response::redirect('activity');
			}
			$data['project'] = $project_id->name ; 
			Session::set('projectname',$project_id->name);

			//Debug::dump($data['activities']);die;
		}
		
		
		$this->template->title = 'Project duration and risk prediction';
		$this->template->content = View::forge('predict/index', $data);
	}
	public function action_choose()
	{

		$data['items'] = Model_Project::find(array('where'=>array('ongoing'=>1)));
		//Debug::dump($data['items']);die;
		$this->template->title = 'Project duration and risk prediction';
		$this->template->content = View::forge('predict/choose', $data);
	}
	public function action_create()
	{

		Debug::dump(Input::post());die;
		$this->template->title = 'Project duration and risk prediction';
		$this->template->content = View::forge('predict/index', $data);
	}

}
