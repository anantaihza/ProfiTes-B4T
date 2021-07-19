<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasMasTeknik extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_teknik'  => 'T-1',
			],
			[
				'nama_teknik'  => 'T-2',
			]

		];
		$this->db->table('mas_mas_teknik')->insertBatch($data);
	}
}
