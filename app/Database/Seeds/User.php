<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class User extends Seeder
{
	public function run()
	{
		$now = new Time('now');
		$date = new Time('2020-01-01');
		$data = [
			[
				'username' => 'admin',
				'email' => 'admin@gmail.com',
				'password' => password_hash('admin', PASSWORD_BCRYPT),
				'tgl_user' => $now,
				'role' => 'admin'
			],
			[
				'username' => 'ananta',
				'email' => 'ananta@gmail.com',
				'password' => password_hash('ananta', PASSWORD_BCRYPT),
				'tgl_user' => $date,
				'role' => 'user'
			],

		];
		$this->db->table('users')->insertBatch($data);
	}
}
