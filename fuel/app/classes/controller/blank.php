<?php

class Controller_Blank extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Blank &raquo; Index';
		$this->template->content = View::forge('blank/index', $data);
	}

}
