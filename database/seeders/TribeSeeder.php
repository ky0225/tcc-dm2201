<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TribeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dm_tribes')->insert([
			[
				'name' => 'アーク・セラフィム',
				'name_kana' => 'あーく・せらふぃむ',
			],
			[
				'name' => 'アース・ドラゴン',
				'name_kana' => 'あーす・どらごん',
			],
		]);
	}
}
