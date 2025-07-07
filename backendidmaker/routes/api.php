<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CompletedController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\EmployeeCompleteController;
use App\Http\Controllers\EmployeePendingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');





Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::delete('/delete-student/{id}', [StudentController::class, 'destroy']);
    Route::get('/users',[AuthController::class, 'index']);
    Route::post('logout',[AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/store', [PendingController::class, 'store']);
    Route::get('/complete',[CompletedController::class, 'index']);
    Route::post('/profile-edit/{id}', [UserController::class, 'update']);
    Route::get('/profile-show', function (Request $request) {
        return $request->user();
    });
    Route::get('/employeecomplete',[EmployeeCompleteController::class, 'index']);
    Route::post('/employee-store', [EmployeePendingController::class, 'store']);
    Route::get('/pending/{student_id}', [PendingController::class, 'showid']);
    Route::post('/save-id-layout', [PendingController::class, 'saveIdLayout']);
    Route::get('/completed/{student_id}', [CompletedController::class, 'show']);
    Route::post('/completed', [CompletedController::class, 'store']);
    Route::get('/showcompleteid/{id}', [CompletedController::class, 'showcompleteid']);
    Route::post('/completed/{id}', [CompletedController::class, 'update']);
    Route::get('/completeid/{id}', [CompletedController::class, 'completeid']);
});



Route::get('/student-list', [AuthController::class, 'list']);



