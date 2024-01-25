<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\IncomesController;

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


//Langkah 8

// route ini digunakan untuk menampilkan halaman ke home/index

Route::get('/', function () {
    return view('home/index');
});


//9.	Membuat container untuk halaman Login & Register di resources/views/layouts/auth.blade.php



// //route home
// Route::view('/', 'home.index')->name('home');

// langkah 19
//auth routes
// Auth Routes
Route::group(['middleware' => 'web'], function () {
    //menapilkan halaman login
    Route::get('/login', [Auth\LoginController::class, 'showLoginForm'])->name('login');

    //memproses halaman login
    Route::post('/login', [Auth\LoginController::class, 'login']);

    //menampilkan form register
    Route::get('/register', [Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

    //menampilkan halaman register
    Route::post('/register', [Auth\RegisterController::class, 'register']);
    Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');
});

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes();


//Langkah 3L
//route category
Route::group(['middleware' => ['auth']], function () {
    Route::get('categories', [CategoriesController::class, 'index'])->name('categories');
    Route::get('categories/add', [CategoriesController::class, 'addPage'])->name('categories.addPage');
    Route::post('categories/insert', [CategoriesController::class, 'insert'])->name('categories.insert');
    Route::get('categories/edit/{id}', [CategoriesController::class, 'editPage'])->name('categories.editPage');
    Route::put('categories/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::get('categories/delete/{id}', [CategoriesController::class, 'delete'])->name('categories.delete');
});

//langkah 5L 
//Konfigurasi Sidebar Link Item di resources/views/layouts/partials/sidebar.blade.php



//Langkah 5M
// Incomes
Route::middleware(['auth'])->group(function () {
    Route::get('incomes', [IncomesController::class, 'index'])->name('incomes');
    // Route::get('/incomes', [IncomesController::class, 'index'])->name('incomes');

    Route::get('incomes/add', [IncomesController::class, 'addPage'])->name('incomes.addPage');
    Route::post('incomes/insert', [IncomesController::class, 'insert'])->name('incomes.insert');
    Route::get('incomes/edit/{id}', [IncomesController::class, 'editPage'])->name('incomes.editPage');
    Route::put('incomes/update/{id}', [IncomesController::class, 'update'])->name('incomes.update');
    Route::get('incomes/delete/{id}', [IncomesController::class, 'delete'])->name('incomes.delete');
});
//Langkah 6M konfig sidebar link

use App\Http\Controllers\ExpensesController;
// Expenses
Route::middleware(['auth'])->group(function () {
    Route::get('expenses', [ExpensesController::class, 'index'])->name('expenses');
    Route::get('expenses/add', [ExpensesController::class, 'addPage'])->name('expenses.addPage');
    Route::post('expenses/insert', [ExpensesController::class, 'insert'])->name('expenses.insert');
    Route::get('expenses/edit/{id}', [ExpensesController::class, 'editPage'])->name('expenses.editPage');
    Route::put('expenses/update/{id}', [ExpensesController::class, 'update'])->name('expenses.update');
    Route::get('expenses/delete/{id}', [ExpensesController::class, 'delete'])->name('expenses.delete');
});
