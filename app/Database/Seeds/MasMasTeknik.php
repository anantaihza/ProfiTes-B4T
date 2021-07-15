<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasMasTeknik extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id_parameter' => 1,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 2,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 3,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 4,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 5,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 6,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 7,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 8,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 9,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 10,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 11,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 12,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 13,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 14,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 15,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 16,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 17,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 18,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 19,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 20,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 21,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 22,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 23,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 24,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 25,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 26,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 27,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 28,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 29,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 30,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 31,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 32,
				'nama_teknik'  => 'T-1',
			],
			[
				'id_parameter' => 33,
				'nama_teknik'  => 'T-1',
			],

		];
		$this->db->table('mas_mas_teknik')->insertBatch($data);
	}
}
