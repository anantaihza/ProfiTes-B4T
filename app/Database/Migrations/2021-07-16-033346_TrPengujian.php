<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TrPengujian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_tr_pengujian' => [
				'type' 			 => 'INT',
				'constraint' 	 => 11,
				'unsigned' 		 => TRUE,
				'auto_increment' => TRUE
			],
			'id_administrasi' => [
				'type'		 => 'INT',
				'constraint' => 11,
				'unsigned'	 => TRUE
			],
			'id_parameter' => [
				'type'		 => 'INT',
				'constraint' => 11,
				'unsigned'	 => TRUE
			],
			'hasilUji_A' => [
				'type'		 => 'DECIMAL',
				'constraint' => '5,2',
			],
			'hasilUji_B' => [
				'type'		 => 'DECIMAL',
				'constraint' => '5,2',
			],
			'rerata' => [
				'type'		 => 'DECIMAL',
				'constraint' => '5,2',
			],
			'u95' => [
				'type'		 => 'DECIMAL',
				'constraint' => '5,2',
			],
			'standar_acuan' => [
				'type'		 => 'VARCHAR',
				'constraint' => '128',
				'default'	 => 'IK-14-LMB08-28'
			],
			'tgl_pengujian' => [
				'type'		 => 'DATETIME'
			],
		]);
		$this->forge->addKey('id_tr_pengujian', TRUE);
		$this->forge->addForeignKey('id_administrasi', 'tr_administrasi', 'id_administrasi', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_parameter', 'mas_parameter', 'id_parameter', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tr_pengujian');
	}

	public function down()
	{
		$this->forge->dropTable('tr_pengujian');
	}
}
