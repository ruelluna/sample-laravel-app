<?php

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
    return view('welcome'); // welcome.blade.php
});


Route::get('about', function(){
    return "About";
});


Route::get('login', function(){
    return "Login";
});


Route::get('register', function(){
    return "Register";
});


Route::get('admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin_users');
Route::get('admin/users/{id}', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin_show_user');
Route::get('admin/users/{id}/delete', [\App\Http\Controllers\AdminController::class, 'remove'])->name('admin_remove_user');


Route::get('where', function(){

    $users = \App\User::where([
        'name' => 'Keith Deckow DVM'
    ])->get();

    return $users;
});


Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);


Route::get('users/insert', function(){

    $faker = Faker\Factory::create();

    \App\User::create([
       'email' => $faker->email,
        'name' => $faker->name,
        'password' => \Illuminate\Support\Facades\Hash::make($faker->password)
    ]);
});

//  MVC
// M = Model
// V = View
// C = Controller




