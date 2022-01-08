<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();

        return response()->json($categories);
    } // end of getCategories method

    public function getCourses()
    {
        $courses = Course::all();

        return response()->json($courses);
    } // end of getCourses method
}
