<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ASMController;
use App\Http\Controllers\BlogController;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[ASMController::class,'index']);
Route::get('/tt',[ASMController::class,'about']);

Route::get('/abc',[ASMController::class,'new_blog']);

Route::get('/lh',[ASMController::class,'contact']);
Route::get('/dm',[ASMController::class,'blog']);


Route::get('/dm-by-id/{id}',[ASMController::class,'get_tt_by_dm']);

Route::get('/dm/ct/{id}',[ASMController::class,'ct_tt_by_dm'])->name('ct_tt_by_dm');


Route::get('/admin',[ASMController::class,'index_admin']);


Route::get('/list_cate',[ASMController::class,'list_cate']);

Route::get('/list_cate/{id}',[CategoryController::class,'xoa_dm'])->name('xoa_dm');

Route::get('/add_cate',[ASMController::class,'add_cate']);
Route::post('/add_cate',[CategoryController::class,'them_dm'])->name('them_dm');

Route::get('/update_cate/{id}',[CategoryController::class,'capnhat']);
Route::post('/update_cate/{id}',[CategoryController::class,'capnhat_dm'])->name('capnhat_dm');


Route::get('/list_blog',[ASMController::class,'list_blog']);

Route::get('/add_blog',[ASMController::class,'add_blog']);
Route::post('/add_blog',[BlogController::class,'them_bv'])->name('them_bv');

Route::get('/list_blog/{id}',[BlogController::class,'xoa_bv'])->name('xoa_bv');

Route::get('/update_blog/{id}',[BlogController::class,'capnhat_blog']);
Route::put('/update_blog/{id}',[BlogController::class,'capnhat_bv'])->name('capnhat_bv');


Route::get('/list_acc',[ASMController::class,'list_acc']);
