<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerCrd ;

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

Route :: get('/add', [CustomerCrd::class,'add_post'])->name('add.data');
Route :: post('/add-post', [CustomerCrd::class,'addpost'])->name('add.post');
Route :: get('/', [CustomerCrd::class,'getdata'])->name('get.data');
Route :: get('/view/{id}', [CustomerCrd::class,'data_view'])->name('view.data');
Route :: get('/delete-post/{id}', [CustomerCrd::class,'delete_post'])->name('deleted.data');
Route :: get('/edit-post/{id}', [CustomerCrd::class,'edit_post'])->name('edit.post');
Route :: post('/update-post', [CustomerCrd::class,'update_post'])->name('update.post');