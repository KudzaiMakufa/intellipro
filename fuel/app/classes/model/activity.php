<?php
class Model_Activity extends Model_Crud
{
	protected static $_table_name = 'activities';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('project', 'Project', 'required|max_length[255]');
		$val->add_field('sequence_no', 'Sequence No', 'required');
		$val->add_field('number_of_members', 'Number Of Members', 'required|max_length[255]');
		$val->add_field('optimal_completion', 'Optimal Completion', 'required|max_length[255]');
		$val->add_field('quickest_completion', 'Quickest Completion', 'required|max_length[255]');
		$val->add_field('late_competion', 'Late Competion', 'required|max_length[255]');
		$val->add_field('totalcost', 'Totalcost', 'required');

		return $val;
	}

}
