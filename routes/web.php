<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MedicineBrandController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineIngredientController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\UserController;
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


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/login', [AuthController::class, 'authenticate']);

Route::group(['middleware' => 'auth_api'], function () {



    Route::group(['middleware' => 'revalidate'], function () {

        Route::get('/', [DashboardController::class, 'index']);


        Route::resource('/hospitals', HospitalController::class);
        

    });


    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::group(['middleware' => 'revalidate'], function () {

    Route::group(['controller' => AuthController::class], function () {
        Route::get('/login', 'login')->middleware('guest_api');
    });
});
