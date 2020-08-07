<?php

class Controller_Main extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Main &raquo; Index';
		$this->template->content = View::forge('main/index', $data);
	}

}
