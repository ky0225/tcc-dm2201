<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallOfFameSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dm_hall_of_fames')->insert([
			[
				'name' => 'なし',
			],
			[
				'name' => '殿堂入り',
			],
		]);
	}
}
