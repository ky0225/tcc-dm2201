<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoulSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dm_souls')->insert([
			[
				'name' => 'なし',
			],
			[
				'name' => 'H・ソウル',
			],
		]);
	}
}
