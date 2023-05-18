<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('login', function () {  return view('login.login');  })->name('loginn');
Route::get('signUp', function () { return view('login.signUp'); })->name('signUp');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::group(['middleware' => ["auth:web"]], function () {
    Route::group(['middleware' => ["isSuperAdmin:web"]], function () {
        Route::group(['prefix' => 'user'], function () {
            Route::get('create', function () {  return view('user.create');  })->name('userCreate');
            Route::get('update/{id}', [UserController::class, 'updateP'])->name('userUpdateP');
            Route::get('list', [UserController::class, 'list'])->name('userList');
            Route::post('create', [UserController::class, 'create'])->name('userCreate');
            Route::post('update', [UserController::class, 'update'])->name('userUpdate');
            Route::get('delete/{id}', [UserController::class, 'delete'])->name('userDelete');
        }); 
        Route::group(['prefix' => 'category'], function () {
            Route::get('create',function () {  return view('category.create');  })->name('categoryCreate');
            Route::get('update/{id}', [CategoryController::class, 'updateP'])->name('categoryUpdateP');
            Route::get('list', [CategoryController::class, 'list'])->name('categoryList');
            Route::post('create', [CategoryController::class, 'create'])->name('categoryCreate');
            Route::post('update', [CategoryController::class, 'update'])->name('categoryUpdate');
            Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('categoryDelete');
        });   
    });
        Route::group(['prefix' => 'post'], function () { 
            Route::get('list', [PostController::class, 'list'])->name('postList');
            Route::post('create', [PostController::class, 'create'])->name('postCreate');
            Route::post('update', [PostController::class, 'update'])->name('postUpdate');
            Route::get('delete/{id}', [PostController::class, 'delete'])->name('postDelete');
        });   
        
    
    
    
    Route::get('category', [CategoryController::class, 'index'])->name('categoryIndex');
    Route::get('/', function () { return view('layouts.welcome');})->name('welcome');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});