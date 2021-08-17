<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MasPengujian extends Seeder
{
	public function run()
	{
		$now = new Time('now');
		$data = [
			[
				'nama_pengujian' => 'Paket 1 (Batubara)',
				'biaya'			 => 4000000,
				'biaya_terbilang' => 'Empat Juta Rupiah',
				'keterangan'	 => 'Ash Content, Volatile Matter, Gross Calorific Value, Total Surfur',
				'tgl_paket' 	 => $now
			],
			[
				'nama_pengujian' => 'Paket 2 (Batubara)',
				'biaya'			 => 6000000,
				'biaya_terbilang' => 'Enam Juta Rupiah',
				'keterangan'	 => 'Ash Content, Volatile Matter, Gross Calorific Value, Total Surfur, Ultimate (Carbon, Hydrogen dan Nitrogen), Ash Fusion Temperature (AFT), Hardgrove Grindability Index (HGI), Komposisi abu/ash analysis (SiO2, Al2O3, Fe2O3, CaO, MgO, Na2O, K2O, MnO, TiO2, SO3, LOI)',
				'tgl_paket' 	 => $now
			],
			[
				'nama_pengujian' => 'Paket 3 (Nikel Laterit)',
				'biaya'			 => 6000000,
				'biaya_terbilang' => 'Enam Juta Rupiah',
				'keterangan'	 => 'SiO2, Fe2O3, Al2O3, Ni, CaO, MgO, Co, Cr2O3, LOI',
				'tgl_paket' 	 => $now
			],
		];
		$this->db->table('mas_pengujian')->insertBatch($data);
	}
}
