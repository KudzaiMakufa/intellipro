<?php
class Model_Issue extends Model_Crud
{
	protected static $_table_name = 'issues';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('problem', 'Problem', 'required|max_length[255]');
		$val->add_field('module', 'Module', 'required|max_length[255]');
		$val->add_field('reported_by', 'Reported By', 'required|max_length[255]');

		return $val;
	}

}
