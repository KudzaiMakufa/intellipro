<?php
class Model_Menu extends Model_Crud
{
	protected static $_table_name = 'menus';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('icon', 'Icon', 'required|max_length[255]');
		$val->add_field('roles', 'Roles', 'required|max_length[255]');
		$val->add_field('position', 'Position', 'required');

		return $val;
	}

}
