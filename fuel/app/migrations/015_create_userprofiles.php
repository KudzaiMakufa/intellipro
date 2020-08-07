<?php

namespace Fuel\Migrations;

class Create_userprofiles
{
	public function up()
	{
		\DBUtil::create_table('userprofiles', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'user_id' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'first_name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'surname' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'email' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'phone_number' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'position' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'department' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('userprofiles');
	}
}