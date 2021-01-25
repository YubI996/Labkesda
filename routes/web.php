<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'superadmin',"prefix"=>"admin/kesmas/"], function(){
    Route::get('parameter', \App\Http\Livewire\Parameter\Index::class)->name('kesmas.parameter');
    Route::get('user', \App\Http\Livewire\User\Index::class)->name('kesmas.user');
    // Route::post('store-parameter', 'KesmasController@storeParameter')->name('storeParameter');
});
