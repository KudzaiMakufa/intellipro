<?php
class Controller_Task extends Controller_Template
{
	public function action_index()
	{	if(Input::method() == 'POST' ){

			Response::redirect('task/list/'.Input::post('name').'/'.Input::post('listitem'));
		
		}else{
		$data['activities'] = Model_Activity::find(array('order_by'=>array('id'=>'desc')));
		}
		$this->template->title = "Projects";
		$this->template->content = View::forge('task/index', $data);

	}
	public function action_assign()
	{



		
		$this->template->title = "Assign Tasks";
		$this->template->content = View::forge('task/index', $data);	
	}
	public function action_list($task = null,$activity = null)
	{

		if(!is_numeric($task) || $task < 2 ){
			Session::set_flash('error','select valid tasks');
			Response::redirect('task/index');
		}
		$array[] = null;
		$data[] = null ;
		if(Input::method() == 'POST')
		{
			for ($item=0; $item < $task ; $item++) 
			{ 

				$taskmodel  = Model_Task::forge(array(
						'name' => Input::post($item),
						'duration' => Input::post(''.$item.'duration'),
						'activity_id' =>$activity ,
						'done' =>'false' ,
						'created_at' => time(),
						'updated_at' => time(),

					));

				if($taskmodel && $taskmodel->save())
				{

					if($item+1 == $task)
					{
						Session::set_flash('success','added tasks to activities');
						Response::redirect('task/index');
					}
					
					
				}

			
			}

		}
		else
		{
			
			$array[] = null;
			for ($i=0; $i < $task ; $i++) 
			{ 
				$array[$i]= $i ;
			}

			$data['tasks'] = $array ;
			

		}
			

		$this->template->title = "Tasks";
		$this->template->content = View::forge('task/create', $data);

	}




	public function action_view($id = null)
	{

	
		is_null($id) and Response::redirect('activity');
		$data['tasks'] = Model_Task::find(array('where'=>array('activity_id'=>$id)))	;
		$data['id'] = $id ; 
		

		$this->template->title = "Task";
		$this->template->content = View::forge('task/view', $data);

	}

// 	public function action_create()
// 	{
// 		if (Input::method() == 'POST')
// 		{
// 			$val = Model_Task::validate('create');

// 			if ($val->run())
// 			{
// 				$task = Model_Task::forge(array(
// 					'name' => Input::post('name'),
// 					'duration' => Input::post('duration'),
// 				));

// 				if ($task and $task->save())
// 				{
// 					Session::set_flash('success', 'Added task #'.$task->id.'.');
// 					Response::redirect('task');
// 				}
// 				else
// 				{
// 					Session::set_flash('error', 'Could not save task.');
// 				}
// 			}
// 			else
// 			{
// 				Session::set_flash('error', $val->error());
// 			}
// 		}

// 		$this->template->title = "Tasks";
// 		$this->template->content = View::forge('task/create');

// 	}

	public function action_setcompleted($id = null,$urlid)
	{
		is_null($id) and Response::redirect('activity');

		$task = Model_Task::find_one_by_id($id);

		$task->done = "true";
		if ($task->save())
		{
			Session::set_flash('success', 'task status updated #'.$id);
			Response::redirect('task/view/'.$urlid);
		}

		

		$this->template->set_global('task', $task, false);
		$this->template->title = "Tasks";
		$this->template->content = View::forge('task/edit');

	}

// 	public function action_delete($id = null)
// 	{
// 		if ($task = Model_Task::find_one_by_id($id))
// 		{
// 			$task->delete();

// 			Session::set_flash('success', 'Deleted task #'.$id);
// 		}

// 		else
// 		{
// 			Session::set_flash('error', 'Could not delete task #'.$id);
// 		}

// 		Response::redirect('task');

// 	}

}
