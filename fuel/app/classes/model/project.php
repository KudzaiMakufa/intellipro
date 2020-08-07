<?php
class Model_Project extends Model_Crud
{
	protected static $_table_name = 'projects';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('start_date', 'Start Date', 'required');
		$val->add_field('client_name', 'Client Name', 'required|max_length[255]');
		$val->add_field('client_address', 'Client Address', 'required|max_length[255]');
		$val->add_field('project_type', 'Project Type', 'required|max_length[255]');
		$val->add_field('project_manager', 'Project Manager', 'required|max_length[255]');
		$val->add_field('completion_date', 'Completion Date', 'required|max_length[255]');

		return $val;
	}

}
