<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCoutroller;
use App\Http\Controllers\ComponentsController;

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


Route::middleware('lang')->get('/{lang}', [AuthCoutroller::class, 'home']);
Route::middleware('lang')->get('/', function () {
    return redirect()->to('/'.app()->getLocale());
});

Route::get('{lang}/admin', function () {
    return view('admin.welcome');
})->middleware('checkUserLogin');



Route::get('{lang}/login', function () {
    return view('admin.login');
});

Route::post('post-login', [AuthCoutroller::class, 'postLogin'])->name('login.post');
Route::get('admin/logout', [AuthCoutroller::class, 'logout'])->name('logout');

Route::middleware('lang')->controller(ComponentsController::class)->group(function () {
    Route::get('components/header', 'header');
    Route::get('components/nav', 'nav');
    Route::get('components/banner', 'banner');
    Route::get('components/welcome', 'welcome');
    Route::get('components/story', 'story');
    Route::get('components/goals', 'goals');
    Route::get('components/about', 'about');
    Route::get('components/causes', 'causes');
    Route::get('components/customers', 'customers');
    Route::get('components/contact', 'contact');
    Route::get('components/colors', 'colors');
    Route::get('components/courses', 'courses');
    Route::get('components/courses/add', 'coursesAdd');
    Route::get('components/courses/edit/{id}', 'coursesEdit');
    Route::get('components/clint', 'clint');
    Route::get('components/clint/add', 'clintAdd');
    Route::get('components/clint/edit/{id}', 'clintEdit');
    Route::get('components/users', 'users');
    Route::get('components/users/add', 'usersAdd');
    Route::get('components/users/edit/{id}', 'usersEdit');
});
