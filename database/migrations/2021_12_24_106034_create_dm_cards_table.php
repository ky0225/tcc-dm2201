<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmCardsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dm_cards', function (Blueprint $table) {
			$table->string('id');
			$table->string('name');
			$table->string('name_kana');
			$table->foreignId('category_id')->constrained('dm_categories');
			$table->foreignId('civilization_id')->constrained('dm_civilizations');
			$table->foreignId('rarity_id')->constrained('dm_rarities');
			$table->integer('power')->nullable();
			$table->integer('cost');
			$table->integer('mana')->nullable();
			$table->text('ability')->nullable();
			$table->text('description')->nullable();
			$table->foreignId('soul_id')->nullable()->constrained('dm_souls');
			$table->foreignId('block_id')->nullable()->constrained('dm_blocks');
			$table->foreignId('hall_of_fame_id')->nullable()->constrained('dm_hall_of_fames');
			$table->date('release_date');
			$table->boolean('direction');
			$table->integer('market_price');
			$table->timestamps();

			$table->primary('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('dm_cards');
	}
}
