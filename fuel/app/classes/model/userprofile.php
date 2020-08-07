<?php
class Model_Userprofile extends Model_Crud
{
	protected static $_table_name = 'userprofiles';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		// $val->add_field('user_id', 'User Id', 'required|max_length[255]');
		$val->add_field('first_name', 'First Name', 'required|max_length[255]');
		$val->add_field('surname', 'Surname', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('phone_number', 'Phone Number', 'required|max_length[255]');
		$val->add_field('position', 'Position', 'required|max_length[255]');
		$val->add_field('department', 'Department', 'required|max_length[255]');

		return $val;
	}

}
