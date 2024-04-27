<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index']);

Route::get('send', [MailController::class,'send']);

Route::resource('/categories',CategoryController::class);
Route::resource('/products',ProductController::class);
