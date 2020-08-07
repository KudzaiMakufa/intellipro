<?php
class Controller_Mainmenu extends Controller_Template
{

	public function action_index()
	{
		$data['mainmenus'] = Model_Mainmenu::find_all();
		$this->template->title = "Mainmenus";
		$this->template->content = View::forge('mainmenu/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('mainmenu');

		$data['mainmenu'] = Model_Mainmenu::find_by_pk($id);

		$this->template->title = "Mainmenu";
		$this->template->content = View::forge('mainmenu/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Mainmenu::validate('create');

			if ($val->run())
			{
				$mainmenu = Model_Mainmenu::forge(array(
					'name' => Input::post('name'),
					'url' => Input::post('url'),
					'position' => Input::post('position'),
					'aligned' => Input::post('aligned'),
					'visble' => Input::post('visble'),
					'icon' => Input::post('icon'),
				));

				if ($mainmenu and $mainmenu->save())
				{
					Session::set_flash('success', 'Added mainmenu #'.$mainmenu->id.'.');
					Response::redirect('mainmenu');
				}
				else
				{
					Session::set_flash('error', 'Could not save mainmenu.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Mainmenus";
		$this->template->content = View::forge('mainmenu/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('mainmenu');

		$mainmenu = Model_Mainmenu::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Mainmenu::validate('edit');

			if ($val->run())
			{
				$mainmenu->name = Input::post('name');
				$mainmenu->url = Input::post('url');
				$mainmenu->position = Input::post('position');
				$mainmenu->aligned = Input::post('aligned');
				$mainmenu->visble = Input::post('visble');
				$mainmenu->icon = Input::post('icon');

				if ($mainmenu->save())
				{
					Session::set_flash('success', 'Updated mainmenu #'.$id);
					Response::redirect('mainmenu');
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

		$this->template->set_global('mainmenu', $mainmenu, false);
		$this->template->title = "Mainmenus";
		$this->template->content = View::forge('mainmenu/edit');

	}

	public function action_delete($id = null)
	{
		if ($mainmenu = Model_Mainmenu::find_one_by_id($id))
		{
			$mainmenu->delete();

			Session::set_flash('success', 'Deleted mainmenu #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete mainmenu #'.$id);
		}

		Response::redirect('mainmenu');

	}

}
