<?php

use App\Http\Controllers\AcademicLevelController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\KnowledgeNetworkController;
use App\Http\Controllers\ContractTypeController;
use App\Models\knowledge_network;
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

Route::get('/', function(){
    return view('welcome');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para Programas
Route::get('programs', [ProgramController::class,'index'])->name('api.programs.index');
Route::post('programs', [ProgramController::class,'store'])->name('api.programs.store');
Route::get('programs/{program}', [ProgramController::class,'show'])->name('api.programs.show');
Route::put('programs/{program}', [ProgramController::class,'update'])->name('api.programs.update');
Route::delete('programs/{program}', [ProgramController::class,'destroy'])->name('api.programs.delete');

// Rutas para Diaries
Route::get('diaries', [DiaryController::class, 'index'])->name('api.diaries.index');
Route::post('diaries', [DiaryController::class, 'store'])->name('api.diaries.store');
Route::get('diaries/{diary}', [DiaryController::class, 'show'])->name('api.diaries.show');
Route::put('diaries/{diary}', [DiaryController::class, 'update'])->name('api.diaries.update');
Route::delete('diaries/{diary}', [DiaryController::class, 'destroy'])->name('api.diaries.delete');

// Rutas para Companies
Route::get('companies', [CompanyController::class,'index'])->name('api.companies.index');
Route::post('companies', [CompanyController::class,'store'])->name('api.companies.store');
Route::get('companies/{company}', [CompanyController::class,'show'])->name('api.companies.show');
Route::put('companies/{company}', [CompanyController::class,'update'])->name('api.companies.update');
Route::delete('companies/{company}', [CompanyController::class,'destroy'])->name('api.companies.delete');

// Rutas para Messages
Route::get('messages', [MessageController::class,'index'])->name('api.messages.index');
Route::post('messages', [MessageController::class,'store'])->name('api.messages.store');
Route::get('messages/{message}', [MessageController::class,'show'])->name('api.messages.show');
Route::put('messages/{message}', [MessageController::class,'update'])->name('api.messages.update');
Route::delete('messages/{message}', [MessageController::class,'destroy'])->name('api.messages.delete');

// Rutas para Academic Levels
Route::get('academic_levels', [AcademicLevelController::class,'index'])->name('api.academic_levels.index');
Route::post('academic_levels', [AcademicLevelController::class,'store'])->name('api.academic_levels.store');
Route::get('academic_levels/{academic_level}', [AcademicLevelController::class,'show'])->name('api.academic_levels.show');
Route::put('academic_levels/{academic_level}', [AcademicLevelController::class,'update'])->name('api.academic_levels.update');
Route::delete('academic_levels/{academic_level}', [AcademicLevelController::class,'destroy'])->name('api.academic_levels.delete');

// Rutas para Roles
Route::get('roles', [RoleController::class,'index'])->name('api.roles.index');
Route::post('roles', [RoleController::class,'store'])->name('api.roles.store');
Route::get('roles/{role}', [RoleController::class,'show'])->name('api.roles.show');
Route::put('roles/{role}', [RoleController::class,'update'])->name('api.roles.update');
Route::delete('roles/{role}', [RoleController::class,'destroy'])->name('api.roles.delete');

// Rutas para Followups
Route::get('followups', [FollowupController::class,'index'])->name('api.followups.index');
Route::post('followups', [FollowupController::class,'store'])->name('api.followups.store');
Route::get('followups/{followup}', [FollowupController::class,'show'])->name('api.followups.show');
Route::put('followups/{followup}', [FollowupController::class,'update'])->name('api.followups.update');
Route::delete('followups/{followup}', [FollowupController::class,'destroy'])->name('api.followups.delete');

// Rutas para Notifications
Route::get('notifications', [NotificationController::class,'index'])->name('api.notifications.index');
Route::post('notifications', [NotificationController::class,'store'])->name('api.notifications.store');
Route::get('notifications/{notification}', [NotificationController::class,'show'])->name('api.notifications.show');
Route::put('notifications/{notification}', [NotificationController::class,'update'])->name('api.notifications.update');
Route::delete('notifications/{notification}', [NotificationController::class,'destroy'])->name('api.notifications.delete');

// Rutas para User Register
Route::get('user_registers', [UserRegisterController::class,'index'])->name('api.user_registers.index');
Route::post('user_registers', [UserRegisterController::class,'store'])->name('api.user_registers.store');
Route::get('user_registers/{usegit r_register}', [UserRegisterController::class,'show'])->name('api.user_registers.show');
Route::put('user_registers/{user_register}', [UserRegisterController::class,'update'])->name('api.user_registers.update');
Route::delete('user_registers/{user_register}', [UserRegisterController::class,'destroy'])->name('api.user_registers.delete');

// Rutas para Contracts
Route::get('contracts', [ContractController::class,'index'])->name('api.contracts.index');
Route::post('contracts', [ContractController::class,'store'])->name('api.contracts.store');
Route::get('contracts/{contract}', [ContractController::class,'show'])->name('api.contracts.show');
Route::put('contracts/{contract}', [ContractController::class,'update'])->name('api.contracts.update');
Route::delete('contracts/{contract}', [ContractController::class,'destroy'])->name('api.contracts.delete');

// Rutas para knowledge_networks
Route::get('knowledge_networks', [KnowledgeNetworkController::class,'index'])->name('api.knowledge_networks.index');
Route::post('knowledge_networks', [KnowledgeNetworkController::class,'store'])->name('api.knowledge_networks.store');
Route::get('knowledge_networks/{knowledge_network}', [KnowledgeNetworkController::class,'show'])->name('api.knowledge_networks.show');
Route::put('knowledge_networks/{knowledge_network}', [KnowledgeNetworkController::class,'update'])->name('api.knowledge_networks.update');
Route::delete('knowledge_networks/{knowledge_network}', [KnowledgeNetworkController::class,'destroy'])->name('api.knowledge_networks.delete');

// Rutas para Aprendiz
Route::get('apprentice', [ApprenticeController::class,'index'])->name('api.apprentice.index');
Route::post('apprentice', [ApprenticeController::class,'store'])->name('api.apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class,'show'])->name('api.apprentice.show');
Route::put('apprentice/{apprentice}', [ApprenticeController::class,'update'])->name('api.apprentice.update');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class,'destroy'])->name('api.apprentice.delete');
