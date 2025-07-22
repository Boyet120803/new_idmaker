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
use App\Http\Controllers\StudentControllerApi;
use App\Http\Controllers\EmployeeApiController;
use App\Http\Controllers\StudentSchoolYearController;
use App\Http\Controllers\SettingController;

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
    Route::post('/employee-complete-store', [EmployeeCompleteController::class, 'store']);
    Route::get('/employeeshowpending/{id}', [EmployeePendingController::class, 'employeeshowpending']);
    Route::post('/employee-store', [EmployeePendingController::class, 'store']);
    Route::get('/pending/{student_id}', [PendingController::class, 'showid']);
    Route::post('/save-id-layout', [PendingController::class, 'saveIdLayout']);
    Route::get('/completed/{student_id}', [CompletedController::class, 'show']);
    Route::post('/completed', [CompletedController::class, 'store']);
    Route::get('/showcompleteid/{id}', [CompletedController::class, 'showcompleteid']);
    Route::get('/showemployeecomplete/{id}', [EmployeeCompleteController::class, 'showemployeecompleteid']);
    Route::post('/completed/{id}', [CompletedController::class, 'update']);
    Route::post('/employeecompleteupdate/{id}', [EmployeeCompleteController::class, 'employeeupdate']);
    Route::get('/completeid/{id}', [CompletedController::class, 'completeid']);
    Route::get('/total-generated-ids',[EmployeeCompleteController::class,'totalemployees']);
    Route::get('/totalstudents' ,[CompletedController::class, 'totalstudents']);
    // Student archive and unarchive routes
    Route::get('/students-active', [CompletedController::class, 'getActive']);
    Route::get('/archived-students', [CompletedController::class, 'getArchived']);
    Route::post('/archive/{id}/archive', [CompletedController::class, 'archive']);
    Route::post('/unarchive/{id}/unarchive', [CompletedController::class, 'unarchive']);
     // Employee archive and unarchive routes
    Route::get('/employee-active', [EmployeeCompleteController::class, 'getEmployeeActive']);
    Route::get('/archived-employee', [EmployeeCompleteController::class, 'getEmployeeArchived']);
    Route::post('/employeearchive/{id}/archive', [EmployeeCompleteController::class, 'employeearchive']);
    Route::post('/employeeunarchive/{id}/unarchive', [EmployeeCompleteController::class, 'employeeunarchive']);
    Route::get('/showschoolyear/{student_id}', [PendingController::class, 'showschoolyear']);
    Route::post('/settings/school-year', [SettingController::class, 'updateSchoolYear']);
    Route::get('/settings/school-year', [SettingController::class, 'getSchoolYear']);
    // api secure
    Route::post('/mlgcl-students', [StudentControllerApi::class, 'fetch']);
    Route::get('/fetch-employees', [EmployeeApiController::class, 'fetchEmployees']); 
});








