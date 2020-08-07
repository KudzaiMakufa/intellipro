 	<?php
class Controller_Pattern extends Controller_Template
{

	public function action_index()
	{
		$data['patterns'] = Model_Pattern::find_all();
		$this->template->title = "Patterns";
		$this->template->content = View::forge('pattern/index', $data);

	}

// 	public function action_view($id = null)
// 	{
// 		is_null($id) and Response::redirect('pattern');

// 		$data['pattern'] = Model_Pattern::find_by_pk($id);

// 		$this->template->title = "Pattern";
// 		$this->template->content = View::forge('pattern/view', $data);

// 	}

// 	public function action_create()
// 	{
// 		if (Input::method() == 'POST')
// 		{
// 			$val = Model_Pattern::validate('create');

// 			if ($val->run())
// 			{
// 				$pattern = Model_Pattern::forge(array(
// 					'module' => Input::post('module'),
// 					'description' => Input::post('description'),
// 				));

// 				if ($pattern and $pattern->save())
// 				{
// 					Session::set_flash('success', 'Added pattern #'.$pattern->id.'.');
// 					Response::redirect('pattern');
// 				}
// 				else
// 				{
// 					Session::set_flash('error', 'Could not save pattern.');
// 				}
// 			}
// 			else
// 			{
// 				Session::set_flash('error', $val->error());
// 			}
// 		}

// 		$this->template->title = "Patterns";
// 		$this->template->content = View::forge('pattern/create');

// 	}

// 	public function action_edit($id = null)
// 	{
// 		is_null($id) and Response::redirect('pattern');

// 		$pattern = Model_Pattern::find_one_by_id($id);

// 		if (Input::method() == 'POST')
// 		{
// 			$val = Model_Pattern::validate('edit');

// 			if ($val->run())
// 			{
// 				$pattern->module = Input::post('module');
// 				$pattern->description = Input::post('description');

// 				if ($pattern->save())
// 				{
// 					Session::set_flash('success', 'Updated pattern #'.$id);
// 					Response::redirect('pattern');
// 				}
// 				else
// 				{
// 					Session::set_flash('error', 'Nothing updated.');
// 				}
// 			}
// 			else
// 			{
// 				Session::set_flash('error', $val->error());
// 			}
// 		}

// 		$this->template->set_global('pattern', $pattern, false);
// 		$this->template->title = "Patterns";
// 		$this->template->content = View::forge('pattern/edit');

// 	}

// 	public function action_delete($id = null)
// 	{
// 		if ($pattern = Model_Pattern::find_one_by_id($id))
// 		{
// 			$pattern->delete();

// 			Session::set_flash('success', 'Deleted pattern #'.$id);
// 		}

// 		else
// 		{
// 			Session::set_flash('error', 'Could not delete pattern #'.$id);
// 		}

// 		Response::redirect('pattern');

// 	}

 }
