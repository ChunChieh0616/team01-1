<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\BedsController;
use App\Http\Controllers\DormitoriesController;
use App\Http\Controllers\LatesController;
use App\Http\Controllers\LeavesController;
use App\Http\Controllers\RollcallsController;
use App\Http\Controllers\SbrecordsController;
use App\Models\Student;
use App\Models\Bed;
use App\Models\Dormitory;
use App\Models\Late;
use App\Models\Leave;
use App\Models\Rollcall;
use App\Models\Sbrecord;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('students',[StudentsController::class,'index'])->name('students.index');
Route::get('beds',[BedsController::class,'index'])->name('beds.index');
Route::get('dormitories',[DormitoriesController::class,'index'])->name('dormitories.index');
Route::get('lates',[LatesController::class,'index'])->name('lates.index');
Route::get('leaves',[LeavesController::class,'index'])->name('leaves.index');
Route::get('rollcalls',[RollcallsController::class,'index'])->name('rollcalls.index');
Route::get('sbrecords',[SbrecordsController::class,'index'])->name('sbrecords.index');
