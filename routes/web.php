<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1/dm-cards')
	->group(function () {
		Route::get('/', [CardController::class, 'randomThree']); // カード情報（ランダム）
		Route::get('/{cardId}', [CardController::class, 'show']); // カード情報（型番指定）
	});
