<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get('/form', [ProductsController::class, 'FormProduct'])->name("form.product");
Route::post('/form', [ProductsController::class, 'form'])->name("form.create");
Route::get('/products', [ProductsController::class, 'ProductsBarang'])->name('product.create');

Route::get('/admins', [ProductsController::class, 'admin'])->name('admin.create');
Route::get('/edit/{id}', [ProductsController::class, 'formEdit'])->name('form.edit');
Route::put('/update/{id}', [ProductsController::class, 'formUpdate'])->name('form.update');
Route::get('/delete/{id}', [ProductsController::class, 'formDelete'])->name('form.delete');

Route::get('/{id}/profile', [ProductsController ::class, 'Adminshow'])->name('profile.show');
Route::get('/{id}/profile', [ProductsController ::class, 'Tokoshow'])->name('profile.show');