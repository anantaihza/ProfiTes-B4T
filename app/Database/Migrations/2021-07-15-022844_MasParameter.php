<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasParameter extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_parameter' => [
				'type' 			 => 'INT',
				'constraint' 	 => 11,
				'unsigned' 		 => TRUE,
				'auto_increment' => TRUE
			],
			'id_pengujian' => [
				'type'		 => 'INT',
				'constraint' => 11,
				'unsigned'	 => TRUE
			],
			'nama_parameter' => [
				'type' => 'VARCHAR',
				'constraint' => '64'
			],
			'satuan' => [
				'type' => 'VARCHAR',
				'constraint' => '16',
				'default'	 => '%'
			]

		]);

		$this->forge->addKey('id_parameter', TRUE);
		$this->forge->addForeignKey('id_pengujian', 'mas_pengujian', 'id_pengujian', 'CASCADE', 'CASCADE');
		$this->forge->createTable('mas_parameter');
	}

	public function down()
	{
		$this->forge->dropTable('mas_parameter');
	}
}
