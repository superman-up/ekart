<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\testingcontorller;
use App\Http\Controllers\UserController;
use Database\Seeders\StudentSeeder;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id?}',[PageController::class, 'showUser'])->name('user');
Route::get('/home',[pageController::class, 'showHome'])->name('home');
Route::get('/blog', [PageController::class,'showBlog'])->name('blog');
Route::get('test',testingcontorller::class);
Route::get('/records',[StudentController::class, 'showStudent'])->name('records');
Route::get('/singleRecord/{id}',[StudentController::class, 'singleStudent'])->name('view.student');
Route::post("/add", [StudentController::class, 'addStudent'])->name('addStudent');
Route::post("/update/{id}", [StudentController::class, 'updateStudent'])->name('update.student');
Route::get("/updatePage/{id}", [StudentController::class, 'updateStuPage'])->name('updateStudent.page');
Route::get("/delete/{id}", [StudentController::class, 'deleteStudent'])->name('delete.student');
Route::view('/newStudent','addstudent');
Route::view('/newUser','addUser');

Route::get("/singleUser/{id}",[UserController::class,"singleUser"])->name('view.user');
Route::get("/updateUser/{id}",[UserController::class,'updateUser'])->name('update.user');
Route::post("/updateUserdata/{id}",[UserController::class,'updateUserData'])->name('update.UserData');
Route::get("/showUser",[UserController::class,'showUser'])->name('allUser');
Route::post("/addUser",[UserController::class,'addUser'])->name('insertUser');
Route::get("/deleteUser/{id}",[UserController::class,'deleteUser'])->name('delete.user');    
Route::get("/ResetUser",[UserController::class,'resetTable']);