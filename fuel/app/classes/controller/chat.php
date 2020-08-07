<?php

class Controller_Chat extends Controller_Template
{
	

	public function action_index($recipient = null)
	{
		list(, $userid) = Auth::get_user_id();
		if(Input::method() == 'POST'){
			
			$conversation = Model_Conversation::forge(array(
					'message' => Input::post('message'),
					'sender_id' => $userid,
					'receiver_id' =>$recipient,
					'cc' => 0,
					'online_status' => 0,
					'created_at' => time(),
					'updated_at' => time(),
				));

			if ($conversation->save()){}
		
		}
		//for marking as read 
		$convos = Model_Conversation::find(array("where"=>array("sender_id"=>$recipient)));

		if($convos === null){

		}else{
			$count = 0;
			foreach ($convos as $item) {
				
				if($item->online_status == "0"){
					 $item->online_status = "1" ;
					//Debug::dump(count($convos));die;
					 $convos[$count]->save();

					 if($count > count($convos)){

					 }else{
					 	$count++;
					 }
				}else{
					
				}
				# code...
			}
		}

		$data['conversations'] = Model_Conversation::find_all();
		$data['users']  = DB::select()->from('users')->as_object()->execute();
		
		$data['user'] = Model_Userprofile::find_by_user_id($recipient);
		$data['activeaccount'] = $userid ;


		//Debug::dump($data['user'][0]->surname);die;
		$data['recipient'] = $recipient ;	
		$this->template->title = "chat";
		$this->template->content = View::forge('chat/index',$data);
	}
	public function action_sms($recipient = null)
	{
		if(Input::method() == 'POST'){


				if(Input::post('problem') == ""){

					Session::set_flash('error', "Cannot send blank message");
					Response::redirect('chat/sms');					

				}
			// Session::set_flash('error',"Developer has disabled sending text due to costs per sms in test environment  \n !!!!! ");
			// 	Response::redirect('chat/sms');

			 // suppress error message
		    error_reporting(0);

		    // BulkSMS Webservice username for sending SMS.
		    //Get it from User Configuration. Its case sensitive.

		    $username = 'Kidkudzy';

		    // Webservices token for above Webservice username
		    $token = '7e51158d678553beeae996157bb7b087';

		    // BulkSMS Webservices URL
		    $bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';

		    // destination numbers, comma seperated or use #groupcode for sending to group
		    // $destinations = '#devteam,263071077072,26370229338';
		    // $destinations = '26300123123123,26300456456456';  for multiple recipients
		    $destinations = Input::post('reported_by');


		    //Debug::dump($destinations);die;

		    // SMS Message to send
		    $message = Input::post('problem')." \nIntelliPro Management System H160346F";

		    // send via BulkSMS HTTP API

		    $ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
		    $ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
		    $ws_response = @file_get_contents($ws_str);

		    $array = json_decode($ws_response,true) ;
		    if($array['data'][0]['status']  == "OK" && $array['data'][0]['error'] == "0") {
		    	Session::set_flash('success', "Message successfully send to \n ".$array['data'][0]['to']);
				Response::redirect('chat/sms');
		    }else{
		    	Session::set_flash('error', "Message not ! \n  contact admin");
				Response::redirect('chat/sms');
		    }


		
    



		}

		$this->template->title = "Broadcast via text sms service";
		$this->template->content = View::forge('chat/sms',null);
	}
	public function action_message($message =null, $sender = null,$receiver = null){
			
    header('Access-Control-Allow-Origin: *');
			$conversation = Model_Conversation::forge(array(
					'message' => str_replace('%20',' ',$message),
					'sender_id' => $sender,
					'receiver_id' => $receiver,
					'cc' => 0,
					'online_status' => 0,
					'created_at' => time(),
					'updated_at' => time(),
				));

			if ($conversation->save())
			{
				$res = ['check'=> 'send'];
				echo json_encode($res);	
			}
			else{
				$res = ['check'=> 'failed'];
				echo json_encode($res);
			}

		

		return View::forge('test/test',false);
	}
	public function action_mobilehomescreen($sender = null)
	{
	    header('Access-Control-Allow-Origin: *');
		$result = DB::query("SELECT * FROM userprofiles  WHERE user_id != '$sender' ")->as_object()->execute();
		if($result[0]  == false){

			$res = ['check'=> 'nodata'];
			echo json_encode($res);
		}
		else{
				
			$array = [] ; 
			$count = 0 ;
			foreach($result as $item)
			{
				

				$res = ['id'=> $item->user_id,
						'phone'=>	$item->phone_number,
						'name'=>$item->first_name.' '.$item->surname,
					   ];
					//$res = ['check'=> 'nodata'];
				 	
				   		
				$array[$count] = $res ; 
				$count++ ;


					
			}
			echo json_encode($array) ;die;
		
		}



			return View::forge('test/test',false);
	}
	
	public function action_mobile($sender = null,$receiver = null)
	{
	    header('Access-Control-Allow-Origin: *');
		// $sender = 1;
		// $receiver = 2 ;

		
		$result = DB::query("SELECT * FROM conversations WHERE sender_id = '$sender' and receiver_id = '$receiver' OR  sender_id = '$receiver' and receiver_id= '$sender'")->as_object()->execute();
		
		 //Debug::dump($result[0]->message);die;
		
		if($result[0]  == false){

			$res = ['check'=> 'nodata'];
			echo json_encode($res);
		}
		else{
				
			$array = [] ; 
			$count = 0 ;
			foreach($result as $item)
			{
				

				$res = ['message'=> $item->message,
						'sender'=>	$item->sender_id,
						'receiver'=>$item->receiver_id,
						'time'=>date("Y-m-d H:i", $item->created_at) ,
						
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
