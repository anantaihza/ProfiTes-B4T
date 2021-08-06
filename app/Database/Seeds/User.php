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
				'username' => 'admin1',
				'email' => 'admin1@gmail.com',
				'password' => password_hash('admin1', PASSWORD_BCRYPT),
				'tgl_user' => $now,
				'role' => 'admin'
			],
			[
				'username' => 'admin2',
				'email' => 'admin2@gmail.com',
				'password' => password_hash('admin2', PASSWORD_BCRYPT),
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
