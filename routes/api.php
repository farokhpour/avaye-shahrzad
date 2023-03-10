<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('employee',EmployeeController::class)->except([
    'create',
    'edit'
]);

Route::resource('student',StudentController::class)->except([
    'create',
    'edit'
]);

Route::resource('instructor',InstructorController::class)->except([
    'create',
    'edit'
]);

Route::resource('instrument',InstrumentController::class)->except([
    'create',
    'edit'
]);

Route::resource('lesson',LessonController::class)->except([
    'create',
    'edit'
]);
