<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;

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

Route::group([
    "prefix" => "category",
    "as" => "category.",

], function () {
    Route::get("", [CategoryController::class, "index"])->name("index");
    Route::get("create", [CategoryController::class, 'create'])->name("create");
    Route::put("store", [CategoryController::class, 'store'])->name("store");
    Route::get("edit/{id}", [CategoryController::class, 'edit'])->name("edit");
    Route::patch("update{id}", [CategoryController::class, 'update'])->name("update");
    Route::delete("delete{id}", [CategoryController::class, 'destroy'])->name("delete");

});

Route::group([
    "prefix" => "news",
    "as" => "news.",

], function () {
    Route::get("", [NewsController::class, "index"])->name("index");
    Route::get("create", [NewsController::class, 'create'])->name("create");
    Route::put("store", [NewsController::class, 'store'])->name("store");
    Route::get("edit/{id}", [NewsController::class, 'edit'])->name("edit");
    Route::patch("update{id}", [NewsController::class, 'update'])->name("update");
    Route::delete("delete{id}", [NewsController::class, 'destroy'])->name("delete");

});
