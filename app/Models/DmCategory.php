<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmCategory extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'name_kana',
	];

	public function card()
	{
		return $this->hasMany(DmCard::class);
	}
}
