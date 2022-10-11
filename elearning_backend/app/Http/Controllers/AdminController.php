<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class AdminController extends Controller
{
    public function addStudentOrInstructor(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->usertype = $request->get('usertype');
        $user->save();
        return response()->json(
            [
                'message' => 'User has been successfully added',
                'status' => '201',
                'user' => $user,
            ],
            201
        );
    }

    public function addCourses(Request $request)
    {
        $course = new Course();
        $course->course_title = $request->get('course_title');
        $course->course_content = $request->get('course_content');
        $course->save();
        return response()->json([
            'message' => 'Course has been successfully added',
            'status' => '201',
            'course' => $course,
        ]);
    }

    public function assignInstructorToCourse(Request $request)
    {
        $user = User::find($request->email);
        $course = Course::find($request->course);
        echo $user;
        echo $course;
        $user->course()->save($course);
        // // $instructor = new User();
        // $announcement->announcement_title = $request->get('announcement_title');
        // $announcement->announcement_content = $request->get('announcement_content');
        // $announcement->save();
        return response()->json([
            'message' => 'Course has been successfully added to Instructor',
            'status' => '200',
            'course' => $course,
        ]);
    }
}
