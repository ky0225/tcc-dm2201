<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmTribe extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'name_kana',
	];

	public function cardTribe()
	{
		return $this->hasMany(DmCardTribe::class);
	}
}
