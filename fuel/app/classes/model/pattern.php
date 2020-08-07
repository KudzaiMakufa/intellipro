<?php
class Model_Pattern extends Model_Crud
{
	protected static $_table_name = 'patterns';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('module', 'Module', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required|max_length[255]');

		return $val;
	}

}
