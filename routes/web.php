<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Models\products;

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/detail/{post_id}', [AppController::class, 'detail'])->name('detail');
Route::get('/read/{post_id}/{ep}',[AppController::class,'read'])->name('read');
Route::get('/page/{page}',[AppController::class, 'page'])->name('page');
Route::get('/categories', [AppController::class, 'categories'])->name('categories');
Route::get('/movie/categories/{name?}', [AppController::class, 'movie_with_cat'])->name('categories');
Route::get('/movie/{name?}', [AppController::class, 'movie'])->name('movie');

Route::get('/test', function(){
    $name = env('ST23_KEY');
    return $name;
});
Route::get('/products' ,[AppController::class ,'index_product']);
