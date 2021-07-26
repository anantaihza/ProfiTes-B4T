<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TrAdministrasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_administrasi' => [
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
			'id_user' => [
				'type' 			 => 'INT',
				'constraint' 	 => 11,
				'unsigned' 		 => TRUE
			],
			'metode_pengujian' => [
				'type' => 'VARCHAR',
				'constraint' => '32'
			],
			'status_akreditasi' => [
				'type' => 'VARCHAR',
				'constraint' => '32',
			],
			'nama_laboratorium' => [
				'type' => 'VARCHAR',
				'constraint' => '64'
			],
			'telpon_laboratorium' => [
				'type' => 'VARCHAR',
				'constraint' => '15'
			],
			'fax_laboratorium' => [
				'type' => 'VARCHAR',
				'constraint' => '15'
			],
			'alamat_laboratorium' => [
				'type' => 'VARCHAR',
				'constraint' => '128'
			],
			'alamat_pengiriman' => [
				'type' => 'VARCHAR',
				'constraint' => '128'
			],
			'nama_pic' => [
				'type' => 'VARCHAR',
				'constraint' => '64'
			],
			'jabatan_pic' => [
				'type' => 'VARCHAR',
				'constraint' => '32'
			],
			'telpon_pic' => [
				'type' => 'VARCHAR',
				'constraint' => '15'
			],
			'email_pic' => [
				'type' => 'VARCHAR',
				'constraint' => '64'
			],
			'no_va' => [
				'type' => 'VARCHAR',
				'constraint' => '32'
			],
			'no_refrensi' => [
				'type' => 'VARCHAR',
				'constraint' => '32'
			],
			'sistem_pembayaran' => [
				'type' => 'VARCHAR',
				'constraint' => '32',
				'default'	 => 'Pembayaran Secara Langsung'
			],
			'status_pembayaran' => [
				'type' => 'VARCHAR',
				'constraint' => '32',
				'default'	 => 'Belum Lunas'
			],
			'status_pengujian' => [
				'type' => 'VARCHAR',
				'constraint' => '32',
				'default'	 => 'Belum'
			],

		]);
		$this->forge->addKey('id_administrasi', TRUE);
		$this->forge->addForeignKey('id_pengujian', 'mas_pengujian', 'id_pengujian', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tr_administrasi');
	}

	public function down()
	{
		$this->forge->dropTable('tr_administrasi');
	}
}
