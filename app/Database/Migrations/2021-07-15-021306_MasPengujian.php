<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasPengujian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pengujian' => [
				'type' 			 => 'INT',
				'constraint' 	 => 11,
				'unsigned' 		 => TRUE,
				'auto_increment' => TRUE
			],
			'nama_pengujian' => [
				'type' => 'VARCHAR',
				'constraint' => '64'
			],
			'biaya' => [
				'type' => 'INT'
			],
			'biaya_terbilang' => [
				'type' => 'VARCHAR',
				'constraint' => '256'
			],
			'keterangan' => [
				'type' => 'VARCHAR',
				'constraint' => '1280',
				'null' => TRUE
			],
			'tgl_paket' => [
				'type'		 => 'DATETIME'
			],

		]);

		$this->forge->addKey('id_pengujian', TRUE);
		$this->forge->createTable('mas_pengujian');
	}

	public function down()
	{
		$this->forge->dropTable('mas_pengujian');
	}
}
