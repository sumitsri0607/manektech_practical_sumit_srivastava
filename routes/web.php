<?php

use Illuminate\Support\Facades\Route;

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

Route::get('wizard', function () {
    return view('default');
});

Route::post('get_state', [App\Http\Livewire\Wizard::class, 'getStates'])->name('ajaxdata.get_state');
Route::post('get_city', [App\Http\Livewire\Wizard::class, 'getCity'])->name('ajaxdata.get_city');
