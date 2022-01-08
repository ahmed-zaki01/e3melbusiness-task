<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CoursesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CoursesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        return view('dashboard.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        // get validated data
        $data = $request->validated();

        // save category data
        Course::create($data);



        session()->flash('status', 'Course created successfully!');
        return redirect()->route('dashboard.courses.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::select('id', 'name')->get();
        return view('dashboard.courses.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCourseRequest $request, Course $course)
    {
        // get validated data
        $data = $request->validated();

        // remove image in update
        if (!empty($data['image'])) {
            Storage::disk('public')->delete('courses/' . $course->image);
        }

        // update category data
        $course->update($data);

        session()->flash('status', 'Course updated successfully!');
        return redirect()->route('dashboard.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        // remove image in delete
        if (!empty($course->image)) {
            Storage::disk('public')->delete('courses/' . $course->image);
        }

        $course->delete();

        session()->flash('status', 'Course deleted successfully!');
        return redirect()->route('dashboard.courses.index');
    }
}
