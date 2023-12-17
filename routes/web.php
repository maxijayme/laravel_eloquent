<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/projects', [ProjectController::class, 'getAllProjects'])->name('projects');
Route::get('/create-project', [ProjectController::class, 'insertProject'])->name('projects');
Route::get('/update-inactive', [ProjectController::class, 'updateInactiveProject'])->name('projects');
