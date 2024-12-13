<?php
use Siddik\LaravelTranslation\Http\Controllers\LanguageController;


Route::prefix(config('translation.ui_url'))
  ->name("translation.")
  ->middleware(config('translation.route_group_config.middleware'))
  ->group(function () {
  
Route::get("/test", function () {
  $obj = new Siddik\LaravelTranslation\Scanner();
  dd($obj);
});
    Route::get('/', [LanguageController::class, 'findTranslation'])->name('trans');
    Route::get('/create', [LanguageController::class, 'create'])->name('create');
    Route::post('/store', [LanguageController::class, 'store'])->name('store');
    Route::get('/generate', [LanguageController::class, 'generateLangFiles'])->name('generate');
    Route::get('/trans/edit/{key}', [LanguageController::class, 'editTrans'])->name('edit');
    Route::post('/trans/edit/{key}', [LanguageController::class, 'updateTrans'])->name('update');
    Route::get('/trans/delete/{key}', [LanguageController::class, 'deleteTrans'])->name('delete');
    
    Route::get('/study', [LanguageController::class, 'study'])->name('study');
    Route::get('/study/add/{key}', [LanguageController::class, 'addFromStudy'])->name('study.add');
    
  
});
