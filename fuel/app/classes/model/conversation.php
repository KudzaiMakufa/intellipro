<?php
class Model_Conversation extends Model_Crud
{
	protected static $_table_name = 'conversations';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('message', 'Message', 'required|max_length[255]');
		$val->add_field('sender_id', 'Sender Id', 'required|max_length[255]');
		$val->add_field('receiver_id', 'Receiver Id', 'required|max_length[255]');
		$val->add_field('cc', 'Cc', 'required|max_length[255]');
		$val->add_field('online_status', 'Online Status', 'required|max_length[255]');

		return $val;
	}

}
