<?php
use App\Http\Controllers\BooksController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BorrowersController;
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
    return view('dashboard');
});

// Roles routes
Route::resource('roles', RolesController::class);

// Users routes
Route::resource('users', UsersController::class);

// Books routes
Route::resource('books', BooksController::class);

// Borrowers routes
Route::resource('borrowers', BorrowersController::class);