<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;

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


// Route::get('list',[HomeController::class,'list'])->name('list');
// Route::get('service',[HomeController::class,'service'])->name('service');
// Route::get('about',[HomeController::class,'about'])->name('about');

Route::get('service',[ServiceController::class,'service'])->name('service');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('list',[RegisterController::class,'index'])->name('list');
Route::get('create',[RegisterController::class,'create'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('regStore');
Route::get('edit/{id}', [RegisterController::class, 'edit'])->name('edit');
Route::post('update/{id}',[RegisterController::class,'update'])->name('update');
Route::delete('delete/{id}',[RegisterController::class,'destroy'])->name('delete');

Route::resource('Product', ProductController::class);
Route::resource('Seller',SellerController::class);
Route::resource('Purchase',PurchaseController::class);


// Route::resource('user',RegisterController::class);

