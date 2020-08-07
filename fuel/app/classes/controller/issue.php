<?php
class Controller_Issue extends Controller_Template
{

	public function action_index()
	{
		$data['issues'] = Model_Issue::find(array('order_by'=>array('id'=>'desc')));
		$this->template->title = "Issues";
		$this->template->content = View::forge('issue/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('issue');

		$data['issue'] = Model_Issue::find_by_pk($id);

		$this->template->title = "Issue";
		$this->template->content = View::forge('issue/view', $data);

	}
	public function action_fix()
	{
		

		if (Input::method() == 'POST')
		{
				//Debug::dump(Input::post());die;
				$issue = Model_Issue::find_one_by_id(Input::post('problem'));
				$issue->solution = Input::post('solution');
				$issue->reported_by = Input::post('reported_by');
				$issue->status = 'fixed' ;

				if ($issue->save())
				{
					Session::set_flash('success', 'Saved solution for issue #'.$issue->id);
					Response::redirect('issue');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			
		}

		$this->template->title = "Fixed Issues";
		$this->template->content = View::forge('issue/fix');

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Issue::validate('create');

			if ($val->run())
			{



				$issue = Model_Issue::forge(array(
					'problem' => Input::post('problem'),
					'module' => Input::post('module'),
					'status' => 'pending',
					'solution' => 'none',
					'reported_by' => Input::post('reported_by'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				if ($issue and $issue->save())
				{
					$file = DOCROOT . "/python/pattern/".strtolower( str_replace(" ","",Input::post('module'))). ".csv" ;

					$line = array(
					'module' => Input::post('module'),
					'problem' => Input::post('problem'),

					);

					$handle = fopen($file, "a");

					fputcsv($handle,  str_replace(" ","",$line));

					fclose($handle);
					Session::set_flash('success', 'Added issue #'.$issue->id.'.');
					Response::redirect('issue');
				}
				else
				{
					Session::set_flash('error', 'Could not save issue.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Issues";
		$this->template->content = View::forge('issue/create');

	}
	public function action_detect()
	{
		// Session::set_flash('error',"Server has been intentionally  deactivated for machine learning operations by the developer \n Check back later after upgrades ");
		// 		Response::redirect('dashboard');
		$activities = "select *from activities where id > 11   ";
		$query = DB::query($activities)->as_object()->execute();
		$rcds = $query ;
		//$activities  = Model_Activity::find(array('where'=>array('id'>15)));
			
		foreach ($rcds as $item) 
		{
			// Debug::dump($item->name);die;
			$file =  false ;
			while(!$file)
			{

				putenv('PYTHONPATH=/usr/lib/python3.7/site-packages:');
				//$command = "";
				$command = escapeshellcmd(DOCROOT . "/python/pattern/pattern.py ".strtolower( str_replace(" ","",$item->name)));
				$output = exec($command . ' 2>&1', $output, $ret);
				//Checking if there are no errors
				//Debug::dump($ret);die;
				
				if ($ret != 0)
				{
					
					echo "error is " . $output;
					$file = true ;
				}
				else
				{

						
					$recurring = DOCROOT . "/python/pattern/recur_".strtolower( str_replace(" ","",$item->name)). ".csv" ;
					$csvfile = File::exists($recurring);

					if($csvfile)
					{
						if (($handle = fopen($recurring, "r")) !== FALSE) 
						{		

							
							while (($data = fgetcsv($handle, 2000, ",")) !== FALSE)
							{
								$checkisexist = Model_Pattern::find_by_description($data[0]);
								
								if($checkisexist === null){
									$pattern = Model_Pattern::forge(array(
									'module' => $item->name,
									'description' => $data[0],
									'created_at' => time(),
									'updated_at' => time(),

									));

									if($pattern->save())
									{

										/*doing nothing*/

									}else{}
									$file = true ;
								}
								else{
										$file = true ;
								}
								
							}
						}
						else{}
					}
					
					
					
				}
					//Debug::dump($file);die;

			}

				
		}

		Session::set_flash('success','Recurring project problems identified through stemming ,lemmitozation and n gramming ');
		Response::redirect('pattern');
		
		// $activities  = Model_Activity::find();

		// foreach ($activities as $item) 
		// {
		// 	$file =  false ;
		// 	while(!$file)
		// 	{

		// 		putenv('PYTHONPATH=/usr/lib/python3.7/site-packages:');
		// 		//$command = "";
		// 		$command = escapeshellcmd(DOCROOT . "/python/pattern/pattern.py ".strtolower( str_replace(" ","",$item->name)));
		// 		$output = exec($command . ' 2>&1', $output, $ret);
		// 		//Checking if there are no errors
		// 		Debug::dump($output);die;
				
		// 		if ($ret != 0)
		// 		{
					
		// 			echo "error is " . $output;
		// 			$file = true ;
		// 		}
		// 		else
		// 		{
						
		// 			 $csvfile = File::exists(DOCROOT . "/python/pattern/recur". $output . ".csv");
		// 			 if($csvfile){
		// 			 	$file = true ;
		// 			 }

		// 			 Debug::dump($csvfile);die;
		// 			echo $output ; 
		// 		}
		// 	}
			
		// die;
		// }


		$this->template->title = "Recurring Project Problems Detection  ";
		$this->template->content = View::forge('issue/detect');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('issue');

		$issue = Model_Issue::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Issue::validate('edit');

			if ($val->run())
			{
				$issue->problem = Input::post('problem');
				$issue->module = Input::post('module');
				$issue->reported_by = Input::post('reported_by');

				if ($issue->save())
				{
					Session::set_flash('success', 'Updated issue #'.$id);
					Response::redirect('issue');
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

		$this->template->set_global('issue', $issue, false);
		$this->template->title = "Issues";
		$this->template->content = View::forge('issue/edit');

	}

	public function action_delete($id = null)
	{
		if ($issue = Model_Issue::find_one_by_id($id))
		{
			$issue->delete();

			Session::set_flash('success', 'Deleted issue #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete issue #'.$id);
		}

		Response::redirect('issue');

	}

}
