<?php
class Model_Link extends Model_Crud
{
	protected static $_table_name = 'links';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('menu_id', 'Menu Id', 'required');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('icon', 'Icon', 'required|max_length[255]');
		$val->add_field('roles', 'Roles', 'required|max_length[255]');
		$val->add_field('position', 'Position', 'required');
		$val->add_field('controller', 'Controller', 'required|max_length[255]');
		$val->add_field('method', 'Method', 'required|max_length[255]');

		return $val;
	}

}
