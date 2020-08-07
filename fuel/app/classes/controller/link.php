<?php
class Controller_Link extends Controller_Template
{

	public function action_index()
	{
		$data['links'] = Model_Link::find_all();
		$this->template->title = "Links";
		$this->template->content = View::forge('link/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('link');

		$data['link'] = Model_Link::find_by_pk($id);

		$this->template->title = "Link";
		$this->template->content = View::forge('link/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Link::validate('create');

			if ($val->run())
			{
				$array = explode(',' , Input::post('roles')) ; 
				$link = Model_Link::forge(array(
					'menu_id' => Input::post('menu_id'),
					'name' => Input::post('name'),
					'icon' => Input::post('icon'),
					'roles' => serialize($array),
					'position' => Input::post('position'),
					'controller' => Input::post('controller'),
					'method' => Input::post('method'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				if ($link and $link->save())
				{
					Session::set_flash('success', 'Added link #'.$link->id.'.');
					Response::redirect('link');
				}
				else
				{
					Session::set_flash('error', 'Could not save link.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Links";
		$this->template->content = View::forge('link/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('link');

		$link = Model_Link::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Link::validate('edit');

			if ($val->run())
			{
				$link->menu_id = Input::post('menu_id');
				$link->name = Input::post('name');
				$link->icon = Input::post('icon');
				$link->roles = Input::post('roles');
				$link->position = Input::post('position');
				$link->controller = Input::post('controller');
				$link->method = Input::post('method');

				if ($link->save())
				{
					Session::set_flash('success', 'Updated link #'.$id);
					Response::redirect('link');
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

		$this->template->set_global('link', $link, false);
		$this->template->title = "Links";
		$this->template->content = View::forge('link/edit');

	}

	public function action_delete($id = null)
	{
		if ($link = Model_Link::find_one_by_id($id))
		{
			$link->delete();

			Session::set_flash('success', 'Deleted link #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete link #'.$id);
		}

		Response::redirect('link');

	}

}
