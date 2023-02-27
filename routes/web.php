<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ActiveUserController;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\TotalTicketController;
use App\Http\Controllers\ClosedTicketController;
use App\Http\Controllers\InactiveUserController;
use App\Http\Controllers\InprogressTicketController;
use App\Http\Controllers\RaisedTicketController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\TotalTicketInprogressController;
use App\Http\Controllers\TotalTicketResolveController;

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

Route::get('/', [LoginController::class, 'index'])->name('home');
Route::post('/', [LoginController::class, 'store'])->name('home');


Route::controller(RegisteredController::class)->group(function (){
    Route::get('/index', 'index');
    Route::get('/getRegistered', 'getRegistered');
});

Route::controller(ActiveUserController::class)->group(function (){
    Route::get('/activeuser', 'index');
});

Route::controller(InactiveUserController::class)->group(function (){
    Route::get('/inactiveuser', 'index');
    Route::get('/getdata','getdata');
});


Route::controller(MentorController::class)->group(function () {
    Route::get('/mentor', 'index');
    Route::post('/mentor', 'store');
    Route::get('/getMentorData', 'show'); 
    Route::get('/mentor/edit/{id}', 'edit');
    Route::get('/mentor/delete/{id}', 'destroy');
});

Route::controller(TotalTicketController::class)->group(function () {
    Route::get('/totaltickets', 'index');
});

Route::controller(RaisedTicketController::class)->group(function () {
    Route::get('/raisedtickets', 'index');
});

Route::controller(ClosedTicketController::class)->group(function () {
    Route::get('/closedtickets', 'index');
});

Route::controller(InprogressTicketController::class)->group(function () {
    Route::get('/inprogresstickets', 'index');
});

// Route::controller(LoginController::class)->group(function (){
//     Route::get('/login', 'index');
// });

Route::controller(TotalTicketResolveController::class)->group(function (){
    Route::get('/totalticketresolve', 'index');
});

Route::controller(TotalTicketInprogressController::class)->group(function (){
    Route::get('/totalticketinprogress', 'index');
});