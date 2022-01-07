<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmCard extends Model
{
	use HasFactory;

	protected $fillable = [
		'id',
		'name',
		'name_kana',
		'category_id',
		'civilization_id',
		'rarity_id',
		'power',
		'cost',
		'mana',
		'ability',
		'description',
		'soul_id',
		'block_id',
		'hall_of_fame_id',
		'release_date',
		'direction',
		'market_price',
	];

	public function category()
	{
		return $this->belongsTo(DmCategory::class);
	}

	public function civilization()
	{
		return $this->belongsTo(DmCivilization::class);
	}

	public function rarity()
	{
		return $this->belongsTo(DmRarity::class);
	}

	public function soul()
	{
		return $this->belongsTo(DmSoul::class);
	}

	public function block()
	{
		return $this->belongsTo(DmBlock::class);
	}

	public function hallOfFame()
	{
		return $this->belongsTo(DmHallOfFame::class);
	}

	public function cardTribe()
	{
		return $this->hasMany(DmCardTribe::class);
	}
}
