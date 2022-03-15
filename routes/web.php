<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\LogsController;

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [TasksController::class, 'index'])->name('dashboard');
    Route::get('/tasks/create', [TasksController::class, 'create'])->name('create');
    Route::post('tasks', [TasksController::class, 'store']);
    Route::get('tasks/{tasks}', [TasksController::class, 'show']);
    Route::post('logs', [LogsController::class, 'store']);

});

Route::get('invoice', [InvoiceController::class, 'index']);
Route::get('invoice/{invoice}', [InvoiceController::class, 'show']);
Route::get('invoice/total/{invoice}', [InvoiceController::class, 'total']);
Route::get('product/invoice/{invoice}', [ProductController::class, 'create']);
Route::post('product', [ProductController::class, 'store']);

require __DIR__.'/auth.php';