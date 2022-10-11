<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me');
});

Route::post('addUser', [AdminController::class, 'addStudentOrInstructor']);
Route::post('addCourse', [AdminController::class, 'addCourses']);
Route::post('addStudent', [InstructorController::class, 'addStudent']);
Route::post('addAssignment', [InstructorController::class, 'addAssignment']);
Route::post('addAnnouncement', [InstructorController::class, 'addAnnouncement']);
Route::post('assignInstructor', [AdminController::class, 'assignInstructorToCourse']);
Route::get('allAssignments', [StudentController::class, 'allAssignments']);
Route::get('allCourses', [StudentController::class, 'allCourses']);
Route::post('submitAssignment', [StudentController::class, 'submitAssignment']);

// Route::group(["middleware" => "auth:api"], function () {
//     Route::post('favorites', [UserController::class, 'getFavorites']);
//     Route::post('addFavorite', [UserController::class, 'addFavorite']);
//     Route::post('removeFavorite', [UserController::class, 'removeFavorite']);
//     Route::post('blockUser', [UserController::class, 'blockUser']);
//     Route::post('editProfile', [UserController::class, 'editProfile']);
//     Route::post('getMessages', [UserController::class, 'getMessages']);
//     Route::post('sendMessage', [UserController::class, 'sendMessage']);
// });
