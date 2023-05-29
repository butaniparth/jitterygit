<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Funnel;
use App\Http\Controllers\Marketplace;
use App\Http\Controllers\FunnelControllers;
use App\Http\Controllers\FunnelFormControllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Funnel', [Funnel::class, 'index'])->name('user');
Route::post('Funnel/process', [Funnel::class, 'store'])->name('user.process');

Route::get('Marketplace', [Marketplace::class, 'create'])->name('home');
Route::post('Marketplace/process', [Marketplace::class, 'update'])->name('marketplace.process');

Route::get('Funnel-setting', [FunnelControllers::class, 'index'])->name('Funnel-setting');
Route::post('Funnel-setting/process', [FunnelControllers::class, 'store'])->name('Funnel-setting.process');

Route::get('Funnel-form', [FunnelFormControllers::class, 'index'])->name('Funnel-form');
Route::post('Funnel-form/process', [FunnelFormControllers::class, 'store'])->name('Funnel-form.process');
