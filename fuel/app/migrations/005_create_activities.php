<?php

namespace Fuel\Migrations;

class Create_activities
{
	public function up()
	{
		\DBUtil::create_table('activities', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'project' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'sequence_no' => array('null' => false, 'type' => 'double'),
			'number_of_members' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'optimal_completion' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'quickest_completion' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'late_competion' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'totalcost' => array('null' => false, 'type' => 'double'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('activities');
	}
}