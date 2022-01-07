<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DmCard;

class CardController extends Controller
{
	// 文字化け対策
	public function __construct()
	{
		$this->middleware('JpJsonResponse');
	}

	// カード情報をランダムに取得
	public function randomThree()
	{
		$randomCards = DmCard::inRandomOrder()->take(3)->get();
		$jsonData = response()->json(["data" => $randomCards]);

		return $jsonData;
	}

	// 指定型番のカード情報を取得
	public function show($id)
	{
		$card = DmCard::findOrFail($id);

		return $card;
	}
}
