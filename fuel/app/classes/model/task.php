<?php
class Model_Task extends Model_Crud
{
	protected static $_table_name = 'tasks';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('duration', 'Duration', 'required|max_length[255]');

		return $val;
	}

}
