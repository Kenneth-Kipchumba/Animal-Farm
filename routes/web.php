<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedlotController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use App\Models\Purchase;
use App\Models\Sales;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

// Animal Routes
//Route::resource('/animals', AnimalController::class)->name('animals');

Route::resources([
    'animals' => AnimalController::class,
    'breeds' => BreedController::class,
    'feedlots' => FeedlotController::class,
    'purchases' => PurchaseController::class,
    'sales' => SalesController::class,
]);
