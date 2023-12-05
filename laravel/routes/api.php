<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('test', static function () {
    $samples = \App\Models\Sample::all()->toArray();
    return $samples;
});

Route::post('test', static function(Request $request) {
    $request->validate(['text' => 'required|string']);
    return \App\Models\Sample::create(['text' => $request->input('text')]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
