<?php

namespace Fuel\Migrations;

class Create_links
{
	public function up()
	{
		\DBUtil::create_table('links', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'menu_id' => array('null' => false, 'type' => 'double'),
			'name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'icon' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'roles' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'position' => array('null' => false, 'type' => 'double'),
			'controller' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'method' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('links');
	}
}