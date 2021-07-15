<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasPengujian extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_pengujian' => 'Paket 1 (Batubara)',
				'biaya'			 => 4000000
			],
			[
				'nama_pengujian' => 'Paket 2 (Batubara)',
				'biaya'			 => 6000000
			],
			[
				'nama_pengujian' => 'Paket 3 (Nikel Laterit)',
				'biaya'			 => 6000000
			],
		];
		$this->db->table('mas_pengujian')->insertBatch($data);
	}
}
