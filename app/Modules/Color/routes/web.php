<?php
use App\Modules\Color\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/color')->group(function()
{
Route::get('/', 'ColorController@welcome')->name('color.index');
Route::get('/addcolor', [ColorController::class,'formdata'])->name('color.add');
Route::post('/addcolor', [ColorController::class,'getdata'])->name('color.save');
Route::get('/edit/{id}', [ColorController::class,'edit'])->name('color.edit');
Route::post('/update/{id}', [ColorController::class,'update'])->name('color.update');
});