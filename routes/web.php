<?php

use App\Http\Livewire\Action;
use App\Http\Livewire\Form;
use App\Http\Livewire\Home;
use App\Http\Livewire\Name;
use App\Http\Livewire\Post;
use App\Http\Livewire\Product;
use App\Http\Livewire\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Home Livewire
Route::get('/', Home::class);
Route::get('/home', Home::class)->name('home');

//Tutorial Livewire Component
Route::get('/component', Post::class)->name('component');
//Route::get('/user', User::class); Example
Route::get('/welcome', function () {
    return view('welcome');
});

//Tutorial Livewire Route
Route::get('/route/{name}', Name::class)->name('route');

//Tutorial Livewire Property Binding
Route::get('/propertybinding', Form::class)->name('propertybinding');

//Tutorial Livewire Action
Route::get('/action', Action::class)->name('action');

//Tutorial Livewire Action
Route::get('/lifecycle', Product::class)->name('lifecycle');