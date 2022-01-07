<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardTribeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dm_card_tribes')->insert([
			[
				'card_id' => 'dmrp17-083',
				'tribe_id' => 1,
			],
			[
				'card_id' => 'test999-999',
				'tribe_id' => 2,
			],
		]);
	}
}
