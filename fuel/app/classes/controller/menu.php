<?php
class Controller_Menu extends Controller_Template
{

	public function action_index()
	{
		$data['menus'] = Model_Menu::find_all();
		$this->template->title = "Menus";
		$this->template->content = View::forge('menu/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('menu');

		$data['menu'] = Model_Menu::find_by_pk($id);

		$this->template->title = "Menu";
		$this->template->content = View::forge('menu/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Menu::validate('create');

			if ($val->run())
			{
				$array = explode(',' , Input::post('roles')) ; 
				
				$menu = Model_Menu::forge(array(
					'name' => Input::post('name'),
					'icon' => Input::post('icon'),
					'roles' => serialize($array),
					'position' => Input::post('position'),
					'created_at' => time(),
					'updated_at' => time(),
				));

				//Debug::dump(serialize($array));die;

				if ($menu and $menu->save())
				{
					Session::set_flash('success', 'Added menu #'.$menu->id.'.');
					Response::redirect('menu');
				}
				else
				{
					Session::set_flash('error', 'Could not save menu.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Menus";
		$this->template->content = View::forge('menu/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('menu');

		$menu = Model_Menu::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Menu::validate('edit');

			if ($val->run())
			{
				$menu->name = Input::post('name');
				$menu->icon = Input::post('icon');
				$menu->roles = Input::post('roles');
				$menu->position = Input::post('position');

				if ($menu->save())
				{
					Session::set_flash('success', 'Updated menu #'.$id);
					Response::redirect('menu');
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

		$this->template->set_global('menu', $menu, false);
		$this->template->title = "Menus";
		$this->template->content = View::forge('menu/edit');

	}

	public function action_delete($id = null)
	{
		if ($menu = Model_Menu::find_one_by_id($id))
		{
			$menu->delete();

			Session::set_flash('success', 'Deleted menu #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete menu #'.$id);
		}

		Response::redirect('menu');

	}

}
