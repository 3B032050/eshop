<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
/*
products.index url:/ http動詞:get 路由ProductController::class,'index'
products.show url:prodcucts http動詞:get 路由ProductController::class,'show'
products.create url:prodcucts/create http動詞:get 路由ProductController::class,'create'
products.store url:prodcucts/store http動詞:post 路由ProductController::class,'store'
products.edit url:prodcucts/{products}/edit http動詞:get 路由ProductController::class,'edit'
products.update url:prodcucts/{products} http動詞:patch 路由ProductController::class,'update'
products.destroy url:prodcucts/{products} http動詞:delete 路由ProductController::class,'ddestroy'
*/
Route::resource('Products', ProductController::class);

