<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmCardTribe extends Model
{
	use HasFactory;

	public function card()
	{
		return $this->belongsTo(DmCard::class);
	}

	public function tribe()
	{
		return $this->belongsTo(DmTribe::class);
	}
}
