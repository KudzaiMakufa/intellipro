<?php
class Controller_Conversation extends Controller_Template
{

	public function action_index()
	{
		$data['conversations'] = Model_Conversation::find_all();
		$this->template->title = "Conversations";
		$this->template->content = View::forge('conversation/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('conversation');

		$data['conversation'] = Model_Conversation::find_by_pk($id);

		$this->template->title = "Conversation";
		$this->template->content = View::forge('conversation/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Conversation::validate('create');

			if ($val->run())
			{
				$conversation = Model_Conversation::forge(array(
					'message' => Input::post('message'),
					'sender_id' => Input::post('sender_id'),
					'receiver_id' => Input::post('receiver_id'),
					'cc' => Input::post('cc'),
					'online_status' => Input::post('online_status'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				if ($conversation and $conversation->save())
				{
					Session::set_flash('success', 'Added conversation #'.$conversation->id.'.');
					Response::redirect('conversation');
				}
				else
				{
					Session::set_flash('error', 'Could not save conversation.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Conversations";
		$this->template->content = View::forge('conversation/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('conversation');

		$conversation = Model_Conversation::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Conversation::validate('edit');

			if ($val->run())
			{
				$conversation->message = Input::post('message');
				$conversation->sender_id = Input::post('sender_id');
				$conversation->receiver_id = Input::post('receiver_id');
				$conversation->cc = Input::post('cc');
				$conversation->online_status = Input::post('online_status');

				if ($conversation->save())
				{
					Session::set_flash('success', 'Updated conversation #'.$id);
					Response::redirect('conversation');
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

		$this->template->set_global('conversation', $conversation, false);
		$this->template->title = "Conversations";
		$this->template->content = View::forge('conversation/edit');

	}

	public function action_delete($id = null)
	{
		if ($conversation = Model_Conversation::find_one_by_id($id))
		{
			$conversation->delete();

			Session::set_flash('success', 'Deleted conversation #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete conversation #'.$id);
		}

		Response::redirect('conversation');

	}

}
