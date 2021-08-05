<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TrPengiriman extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_tr_pengiriman' => [
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
			'nomor_resi' => [
				'type'		 => 'INT',
				'constraint' => 32,
			],
			'catatan_pengiriman' => [
				'type'		 => 'VARCHAR',
				'constraint' => '128',
			],
			'status_pengiriman' => [
				'type'		 => 'VARCHAR',
				'constraint' => '20',
			],
			'nama_barang' => [
				'type'		 => 'VARCHAR',
				'constraint' => '128',
			],
			'kondisi_barang' => [
				'type'		 => 'VARCHAR',
				'constraint' => '128',
			],
			'keterangan' => [
				'type'		 => 'VARCHAR',
				'constraint' => '128',
			],
			'nama_penerima' => [
				'type'		 => 'VARCHAR',
				'constraint' => '28',
			],
			'tgl_penerimaan' => [
				'type'		 => 'DATETIME'
			],
		]);
		$this->forge->addKey('id_tr_pengiriman', TRUE);
		$this->forge->addForeignKey('id_administrasi', 'tr_administrasi', 'id_administrasi', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tr_pengiriman');
	}

	public function down()
	{
		$this->forge->dropTable('tr_pengiriman');
	}
}
