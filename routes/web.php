<?php

use App\Livewire\Student\Addstudent;
use App\Livewire\Student\Editstudent;
use App\Livewire\Student\Student;
use App\Models\students;
use Illuminate\Support\Facades\Route;

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
//     return view('patient.patient');
// });

Route::get('/', Student::class);
Route::get('student/create', Addstudent::class)->name('addstudent');
Route::get('student/{id}/edit', Editstudent::class)->name('editstudent');
Route::get('student/{id}/delete', Student::class)->name('delete');
