<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



Route::get('home',[CrudController::class,'home']);

Route::get('form',[CrudController::class,'form'])->name('create');

Route::post('create',[CrudController::class,'create'])->name('insert');

Route::get('show/{id}',[CrudController::class,'show'])->name('show');

Route::post('update/',[CrudController::class,'update'])->name('update');

Route::Post('del',[CrudController::class,'del'])->name('del');

