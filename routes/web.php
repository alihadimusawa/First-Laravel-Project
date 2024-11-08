<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/homepage');
});

Route::get('/homepage', [CourseController::class, 'home'])->name('home');


// here i want to pass a value to the the controller by using the url, for ex /category/interractive or /category/software, how can i do that?
Route::get("/category/{path}", [CourseController::class, 'category'])->name('category');

Route::get("/course/{id}", [CourseController::class, 'detail'])->name('detail');

Route::get("/writers", [CourseController::class, 'writer'])->name("writers");

Route::get("/writersCourse/{writer}", [CourseController::class, 'writerCourses'])->name("writerCourses");

Route::get("/about", function(){
    return view("aboutUs");
});

Route::get("/popular", [CourseController::class, 'popular'])->name("popular");