<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\task1;

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

Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/homepage', function () {return view('homepage');});
Route::get('/homepage2', function () {return view('homepage2');});
Route::get('/homepage4', function () {return view('homepage4');});
Route::get('/homepage4', function () {return view('homepage4');});
Route::get('/homepage5', function () {return view('homepage5');});
Route::get('/test2', function () {return view('test2');});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('companies', CompanyCRUDController::class);
Route::resource('tasks', task1::class);

//Route::get('companies/create', [App\Http\Controllers\CompanyCRUDController::class, 'create'])->name('companies.index');
//Route::get('/companies', function () {return view('companies.index');});
//Route::get('tasks', [task1::class, 'index']);
//Route::get('edit/{id}', [task1::class, 'edit'])->name('tasks');
//Route::put('update/{id}', [task1::class, 'update'])->name('tasks');
//Route::resource('post', PostController::class);
Route::get('/test', function(){ return view('test');})->name('test');
Route::post('/test', function(Request $request){\App\Test::create([ 'name' => $request->name]);
flash('Data submitted')->important();return redirect()->back(); });
