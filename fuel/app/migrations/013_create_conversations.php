<?php

namespace Fuel\Migrations;

class Create_conversations
{
	public function up()
	{
		\DBUtil::create_table('conversations', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'message' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'sender_id' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'receiver_id' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'cc' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'online_status' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('conversations');
	}
}