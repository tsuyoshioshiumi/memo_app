<?php
use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function (){
    return view('welcome');
});

Route::resource('memos', MemoController::class);
