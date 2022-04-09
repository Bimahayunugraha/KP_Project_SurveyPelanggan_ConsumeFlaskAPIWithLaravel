<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalysisController;


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

Route::controller(AnalysisController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/chart', 'chartapi');
    Route::get('/kmeans', 'kmeansapi');
    Route::get('/clustering', 'clusteringapi');
});

