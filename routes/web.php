<?php

use App\Http\Controllers\ContactController;
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
})->name('welcome');

Route::prefix('testSite')->group(function(){

    Route::get('/product/{id?}', function ($id=null) {
        return 'product page'.$id;
    })->name('product');

    Route::get('/about', [App\Http\Controllers\AboutController::class, 'aboutindex'])->name('about');
    Route::get('/contract', [App\Http\Controllers\ContactController::class, 'index'])->name('contract.index');
    Route::get('/contract/{id?}', [App\Http\Controllers\ContactController::class, 'show'])->name('contract.show');

});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth')->name('category');

