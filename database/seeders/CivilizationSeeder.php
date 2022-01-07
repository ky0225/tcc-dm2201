<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CivilizationSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dm_civilizations')->insert([
			[
				'name' => '光文明',
			],
			[
				'name' => '闇文明',
			],
		]);
	}
}
