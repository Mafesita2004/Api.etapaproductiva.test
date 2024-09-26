<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\ProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('programs', [ProgramController::class,'index'])->name('api.programs.index');
    Route::post('programs', [ProgramController::class,'store'])->name('api.programs.store');
   Route::get('programs/{program}', [ProgramController::class,'show'])->name('api.programs.show');
  Route::put('programs/{program}', [ProgramController::class,'update'])->name('api.programs.update'); 
   Route::delete('programs/{program}', [ProgramController::class,'destroy'])->name('api.programs.delete');


   Route::get('diaries', [DiaryController::class,'index'])->name('api.diaries.index');
   Route::post('diaries', [DiaryController::class,'store'])->name('api.diaries.store');
  Route::get('diaries/{diary}', [DiaryController::class,'show'])->name('api.diaries.show');
 Route::put('diaries/{diary}', [DiaryController::class,'update'])->name('api.diaries.update'); 
  Route::delete('diaries/{diary}', [DiaryController::class,'destroy'])->name('api.diaries.delete');


  Route::get('companies', [CompanyController::class,'index'])->name('api.companies.index');
  Route::post('companies', [CompanyController::class,'store'])->name('api.companies.store');
 Route::get('companies/{company}', [CompanyController::class,'show'])->name('api.companies.show');
Route::put('companies/{company}', [CompanyController::class,'update'])->name('api.companies.update'); 
 Route::delete('companies/{company}', [CompanyController::class,'destroy'])->name('api.companies.delete');
