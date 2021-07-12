<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user' => [
				'type' 			 => 'INT',
				'constraint' 	 => 11,
				'unsigned' 		 => TRUE,
				'auto_increment' => TRUE
			],
			'username' => [
				'type' 		 => 'VARCHAR',
				'constraint' => '50'
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '64'
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '100'
			],
			'nama_user' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE
			],
			'detail_alamat' => [
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => TRUE
			],
			'no_telepon' => [
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE
			],
			'no_fax' => [
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE
			]

		]);

		$this->forge->addKey('id_user', TRUE);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
