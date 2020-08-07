<?php

namespace Fuel\Migrations;

class Create_patterns
{
	public function up()
	{
		\DBUtil::create_table('patterns', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'module' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'description' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patterns');
	}
}