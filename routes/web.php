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
    Route::get('parameter', \App\Http\Livewire\Kesmas\Parameter\IndexLivewire::class)->name('kesmas.parameter');
    Route::get('user', \App\Http\Livewire\Kesmas\User\IndexLivewire::class)->name('kesmas.user');
    Route::get('sampel', \App\Http\Livewire\Kesmas\Sampel\IndexLivewire::class)->name('kesmas.sampel');
    Route::get('create-sampel', \App\Http\Livewire\Kesmas\Sampel\CreateLivewire::class)->name('kesmas.createSampel');
    Route::get('create-parameter-sampel/{id}', \App\Http\Livewire\Kesmas\Sampel\CreateParameterLivewire::class)->name('kesmas.createParameterSampel');
    
});
