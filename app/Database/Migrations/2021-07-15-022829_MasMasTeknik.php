<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasMasTeknik extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_teknik' => [
				'type' 			 => 'INT',
				'constraint' 	 => 11,
				'unsigned' 		 => TRUE,
				'auto_increment' => TRUE
			],
			'nama_teknik' => [
				'type' => 'VARCHAR',
				'constraint' => '128'
			]

		]);

		$this->forge->addKey('id_teknik', TRUE);
		$this->forge->createTable('mas_mas_teknik');
	}

	public function down()
	{
		$this->forge->dropTable('mas_mas_teknik');
	}
}
