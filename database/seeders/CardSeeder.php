<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dm_cards')->insert([
			[
				'id' => 'dmrp17-083',
				'name' => 'モエル・モヒッチ',
				'name_kana' => 'もえる・もひっち',
				'category_id' => 1,
				'civilization_id' => 1,
				'rarity_id' => 1,
				'power' => 2000,
				'cost' => 2,
				'mana' => 1,
				'ability' => 'バトル中、このクリーチャーのパワーを+3000する。',
				'description' => '大変！大変！「世界をつなぐ柱」の根元が光ってるッチ！',
				'soul_id' => 1,
				'block_id' => 1,
				'hall_of_fame_id' => 1,
				'release_date' => '2021/04/17',
				'direction' => 0,
				'market_price' => 200,
				'created_at' => '2021/12/24 11:11:11',
				'updated_at' => '2021/12/24 12:22:22',
			],
			[
				'id' => 'test999-999',
				'name' => 'てすと',
				'name_kana' => 'てすと',
				'category_id' => 2,
				'civilization_id' => 2,
				'rarity_id' => 2,
				'power' => 9999,
				'cost' => 9,
				'mana' => 1,
				'ability' => 'てすと能力',
				'description' => 'てすとフレーバー',
				'soul_id' => 2,
				'block_id' => 2,
				'hall_of_fame_id' => 2,
				'release_date' => '2021/12/24',
				'direction' => 1,
				'market_price' => 9999,
				'created_at' => '2021/12/24 11:11:11',
				'updated_at' => '2021/12/24 12:22:22',
			],
			[
				'id' => 'test888',
				'name' => 'てすと888',
				'name_kana' => 'てすと888',
				'category_id' => 2,
				'civilization_id' => 2,
				'rarity_id' => 2,
				'power' => 888,
				'cost' => 8,
				'mana' => 1,
				'ability' => 'てすと能力',
				'description' => 'てすとフレーバー',
				'soul_id' => 2,
				'block_id' => 2,
				'hall_of_fame_id' => 2,
				'release_date' => '2021/12/24',
				'direction' => 1,
				'market_price' => 8888,
				'created_at' => '2021/12/20 11:11:11',
				'updated_at' => '2021/12/20 12:22:22',
			],
			[
				'id' => 'test7-7-7',
				'name' => 'てすと7',
				'name_kana' => 'てすと7',
				'category_id' => 2,
				'civilization_id' => 2,
				'rarity_id' => 2,
				'power' => 77,
				'cost' => 77,
				'mana' => 1,
				'ability' => 'てすと能力',
				'description' => 'てすとフレーバー',
				'soul_id' => 2,
				'block_id' => 2,
				'hall_of_fame_id' => 2,
				'release_date' => '2021/11/27',
				'direction' => 1,
				'market_price' => 777,
				'created_at' => '2021/12/27 11:11:11',
				'updated_at' => '2021/12/27 12:22:22',
			],
			[
				'id' => 'test222',
				'name' => 'てすと222',
				'name_kana' => 'てすと222',
				'category_id' => 2,
				'civilization_id' => 2,
				'rarity_id' => 2,
				'power' => 2222,
				'cost' => 2,
				'mana' => 1,
				'ability' => 'てすと能力',
				'description' => 'てすとフレーバー',
				'soul_id' => 2,
				'block_id' => 2,
				'hall_of_fame_id' => 2,
				'release_date' => '2021/11/22',
				'direction' => 1,
				'market_price' => 2222,
				'created_at' => '2021/12/22 11:11:11',
				'updated_at' => '2021/12/22 12:22:22',
			],
		]);
	}
}
