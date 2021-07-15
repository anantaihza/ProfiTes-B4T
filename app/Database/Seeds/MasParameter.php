<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasParameter extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id_pengujian' => 1,
				'nama_parameter' => 'Ash Content'
			],
			[
				'id_pengujian' => 1,
				'nama_parameter' => 'Volatile Matter'
			],
			[
				'id_pengujian' => 1,
				'nama_parameter' => 'Gross Calorific Value'
			],

		];
		$this->db->table('mas_parameter')->insertBatch($data);
	}
}
