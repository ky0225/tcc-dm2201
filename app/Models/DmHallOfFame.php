<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmHallOfFame extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
	];

	public function card()
	{
		return $this->hasMany(DmCard::class);
	}
}
