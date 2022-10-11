<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Assignment;
use App\Models\Announcement;

class StudentController extends Controller
{
    public function allAssignments()
    {
        $assignments = Assignment::all();
        return response()->json([
            'message' => 'Assignments has been successfully sent',
            'status' => '200',
            'assignments' => $assignments,
        ]);
    }
    public function allCourses()
    {
        $courses = Course::all();
        return response()->json([
            'message' => 'Courses has been successfully sent',
            'status' => '200',
            'courses' => $courses,
        ]);
    }
    public function submitAssignment()
    {
        $assignment = Assignment::find('517c43667db388101e00000f');
        return response()->json([
            'message' => 'Assignment has been submitted successfully',
            'status' => '200',
            'courses' => $assignment,
        ]);
    }
}
