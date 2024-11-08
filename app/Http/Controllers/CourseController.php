<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Fetch all courses from the database
        return view('courses.index', compact('courses')); // Return a view with the courses data
    }

    public function home()
    {
        $courses = Course::all();
        return view("homepage", compact("courses"));
    }

    public function category($path)
    {
        // what if we want to only take course with the category of "software engineering"
        if ($path == "interactive") {
            $category = "Interractive Multimedia";
        } else {
            $category = "Software Engineering";
        }

        $courses = Course::where('category', $category)->get();
        return view("category", compact("courses"));
    }

    public function detail($id)
    {
        $course = Course::findOrFail($id);
        return view("detail", compact("course"));
    }

    public function writer()
    {
        $writersDuplicate = Course::all();
        $writers = $writersDuplicate->unique('writer');

        return view('writers', compact('writers'));
    }

    public function writerCourses($writer){
        $courses = Course::where("writer", $writer)->get();
        return view('writersCourse', compact('courses'));
    }
}
