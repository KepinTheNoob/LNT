<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [StaffController::class, 'home']);
Route::get('/home', [StaffController::class, 'home']);

Route::get('/create-staff', [StaffController::class, 'createStaff']);
Route::post('/create-staff1', [StaffController::class, 'createStaff1']);
Route::get('/edit-staff/{id}', [StaffController::class, 'editStaff']);
Route::patch('/update-staff/{id}', [StaffController::class, 'updateStaff']);
Route::delete('/delete-staff/{id}', [StaffController::class, 'deleteStaff']);

//Category
Route::get('/create-category', [CategoryController::class, 'createCategory']);
Route::post('/create-category1', [CategoryController::class, 'createCategory1']);
