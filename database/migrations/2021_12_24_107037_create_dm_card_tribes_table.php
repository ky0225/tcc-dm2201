<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmCardTribesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dm_card_tribes', function (Blueprint $table) {
			$table->id()->unsigned();
			$table->string('card_id');
			$table->foreign('card_id')->references('id')->on('dm_cards');
			$table->foreignId('tribe_id')->constrained('dm_tribes');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('dm_card_tribes');
	}
}
