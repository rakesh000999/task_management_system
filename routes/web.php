<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route for Normal Controller
// Route to View

// Route::get('/', function () {
//     return view('welcome');
// }); 

// Route::get('/about', function () {
//     return view('about');
// });


// Route to Controller to View 

// Route::get('/', [FrontendController::class, 'home']);
// Route::get('/about', [FrontendController::class, 'about']);

// Route for Resource Controller
// Route::resource('/users', UserController::class);

Route::resource('/tasks', TaskController::class);
