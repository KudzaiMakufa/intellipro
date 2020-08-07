<?php
class Controller_Test extends Controller_Template
{

	public function action_index()
	{
		$data['tests'] = Model_Test::find_all();
	
		$this->template->title = "Tests";
		$this->template->content = View::forge('test/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('test');

		$data['test'] = Model_Test::find_by_pk($id);

		$this->template->title = "Test";
		$this->template->content = View::forge('test/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Test::validate('create');

			if ($val->run())
			{
				$test = Model_Test::forge(array(
					'index' => Input::post('index'),
				));

				if ($test and $test->save())
				{
					Session::set_flash('success', 'Added test #'.$test->id.'.');
					Response::redirect('test');
				}
				else
				{
					Session::set_flash('error', 'Could not save test.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Tests";
		$this->template->content = View::forge('test/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('test');

		$test = Model_Test::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Test::validate('edit');

			if ($val->run())
			{
				$test->index = Input::post('index');

				if ($test->save())
				{
					Session::set_flash('success', 'Updated test #'.$id);
					Response::redirect('test');
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

		$this->template->set_global('test', $test, false);
		$this->template->title = "Tests";
		$this->template->content = View::forge('test/edit');

	}

	public function action_delete($id = null)
	{
		if ($test = Model_Test::find_one_by_id($id))
		{
			$test->delete();

			Session::set_flash('success', 'Deleted test #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete test #'.$id);
		}

		Response::redirect('test');

	}

}
