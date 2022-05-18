<?php

use App\Modules\Size\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/size')->group(function()
{
Route::get('/', 'SizeController@welcome')->name('size.index');
Route::get('/addsize', [SizeController::class,'formdata'])->name('size.add');
Route::post('/addsize', [SizeController::class,'getdata'])->name('size.save');
Route::get('/edit/{id}', [SizeController::class,'edit'])->name('size.edit');
Route::post('/update/{id}', [SizeController::class,'update'])->name('size.update');
});
