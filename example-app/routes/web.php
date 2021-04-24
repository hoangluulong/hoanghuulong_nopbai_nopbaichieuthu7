<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TrainersController;
use App\Http\Controllers\TrainersSearch;

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

Route::get('/companies', [CompaniesController::class, 'Companies']);

Route::get('/trainers', [TrainersController::class, 'Trainers']);

Route::get('/searchtrainers', [TrainersSearch::class, 'Trainers']);
