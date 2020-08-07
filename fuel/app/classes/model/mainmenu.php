<?php
class Model_Mainmenu extends Model_Crud
{
	protected static $_table_name = 'mainmenus';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('url', 'Url', 'required|max_length[255]');
		$val->add_field('position', 'Position', 'required|max_length[255]');
		$val->add_field('aligned', 'Aligned', 'required|max_length[255]');
		$val->add_field('visble', 'Visble', 'required|max_length[255]');
		$val->add_field('icon', 'Icon', 'required|max_length[255]');

		return $val;
	}

}
