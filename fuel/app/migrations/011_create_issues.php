<?php

namespace Fuel\Migrations;

class Create_issues
{
	public function up()
	{
		\DBUtil::create_table('issues', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'problem' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'module' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'reported_by' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('issues');
	}
}