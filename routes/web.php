<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return redirect('/redirect');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//    User Defined ROutes(by me)
    Route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');
Route::get('/',[HomeController::class,'userPage'])->name('user.page');
Route::get('/view-category',[AdminController::class,'viewCategory'])->name('view.category');
Route::post('/view-category',[AdminController::class,'addCategory'])->name('add.category');
Route::get('/delete-category/{id}',[AdminController::class,'deleteCategory'])->name('delete.category');
Route::get('/edit-category/{id}',[AdminController::class,'editCategory'])->name('edit.category');
Route::post('/update-category/{id}',[AdminController::class,'updateCategory'])->name('update.category');
Route::get('/add-product',[AdminController::class,'addProductForm'])->name('add.product.form');
Route::post('/add-product',[AdminController::class,'addProduct'])->name('add.product');
Route::get('/show-product',[AdminController::class,'showProduct'])->name('show.product');
Route::get('/delete-product/{id}',[AdminController::class,'deleteProduct'])->name('delete.product');
Route::get('/edit-product/{id}',[AdminController::class,'editProduct'])->name('edit.product');
Route::post('/update-product/{id}',[AdminController::class,'updateProduct'])->name('update.product');
});
Route::get('/',[HomeController::class,'userPage'])->name('user.page');


require __DIR__.'/auth.php';
