<?php

use App\Http\Controllers\Admin\AdminContoller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Frontend\ListingController as FrontendListingController;
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

Route::get('/all-listings', [FrontendListingController::class, 'index'])->name('all-listings');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    /*'role:admin'*/
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('listings', ListingController::class)->middleware('auth');

Route::group(['prefix' => 'admin', 'name' => 'admin.', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [AdminContoller::class, 'index'])->name('admin.index');
    Route::resources([
        'categories' => CategoryController::class,
        'listings' => ListingController::class,
        'subcategories' => SubCategoryController::class,
        'childcategories' => ChildCategoryController::class,
        'countries' => CountryController::class,
        'states' => StateController::class,
        'cities' => CityController::class
    ]);
});
