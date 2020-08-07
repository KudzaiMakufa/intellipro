<?php
class Model_Test extends Model_Crud
{
	protected static $_table_name = 'tests';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('index', 'Index', 'required|max_length[255]');

		return $val;
	}

}
