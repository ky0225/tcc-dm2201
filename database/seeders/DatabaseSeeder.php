<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// \App\Models\User::factory(10)->create();
		$this->call([
			CategorySeeder::class,
			CivilizationSeeder::class,
			RaritySeeder::class,
			SoulSeeder::class,
			BlockSeeder::class,
			HallOfFameSeeder::class,
			TribeSeeder::class,
			CardSeeder::class,
			CardTribeSeeder::class,
		]);
	}
}
