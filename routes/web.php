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
列出7個Products路由應該有的作用
products.index
index方法的作用是顯示資源清單。

products.show
show方法的作用是顯示指定資源。

products.create
create方法的作用是顯示用於建立新資源的表單。

products.store
store方法的作用是將新建立的資源儲存在儲存中。

products.edit
edit方法的作用是顯示編輯指定資源的表單

products.update
update方法的作用是更新儲存中的指定資源。

products.destroy
destroy方法的作用是從儲存中刪除指定的資源。
*/
Route::get('Products',[ProductController::class,'index'])->name("products.index");
Route::get('Products/{Product}',[ProductController::class,'show'])->name("products.show");
Route::get('Products/create',[ProductController::class,'create'])->name("products.create");
Route::post('Products',[ProductController::class,'store'])->name("products.store");
Route::get('Products/{Product}/edit',[ProductController::class,'edit'])->name("products.edit");
Route::patch('Products/{Product}',[ProductController::class,'update'])->name("products.update");
Route::delete('Products/{Product}',[ProductController::class,'destroy'])->name("products.destroy");


