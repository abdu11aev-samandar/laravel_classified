<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ListingController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resources([
    'categories' => CategoryController::class,
    'subcategories' => SubCategoryController::class,
    'childcategories' => ChildCategoryController::class,
    'countries' => CountryController::class,
    'states' => StateController::class,
    'cities' => CityController::class
]);

Route::get('listings/create', [ListingController::class, 'create'])->name('listings.create');
Route::post('listings/store', [ListingController::class, 'store'])->name('listings.store');
