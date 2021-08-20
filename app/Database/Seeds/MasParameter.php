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
			[
				'id_pengujian' => 1,
				'nama_parameter' => 'Total Surfur'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Gross Calorific Value'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Ash Content'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Volatile Matter'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Total Surfur'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Ultimate Carbon'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Ultimate Hydrogen'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Ultimate Nitrogen'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Ash Fusion Temperature'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Hardgrove Grindability Index'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'SiO2'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Al2O3'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Fe2O3'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'CaO'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'MgO'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'Na2O'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'K2O'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'MnO'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'TiO2'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'SO3'
			],
			[
				'id_pengujian' => 2,
				'nama_parameter' => 'LOI'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'SiO2'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'Fe2O3'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'Al2O3'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'Ni'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'CaO'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'MgO'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'Co'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'Cr2O3'
			],
			[
				'id_pengujian' => 3,
				'nama_parameter' => 'LOI'
			],

		];
		$this->db->table('mas_parameter')->insertBatch($data);
	}
}
