<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assignment;

class InstructorController extends Controller
{
    public function addStudent(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->usertype = 'Student';
        $user->save();
        return response()->json([
            'message'=>'Student has been successfully added',
            'status'=>'201',
            'user'=>$user
        ],201);
    }
    public function addAssignment(Request $request)
    {
        $assignment = new Assignment();
        $assignment->assignment_title = $request->get('assignment_title');
        $assignment->assignment_content = $request->get('assignment_content');
        $assignment->save();
        return response()->json([
            'message'=>'Assignment has been successfully added',
            'status'=>'201',
            'assignment'=>$assignment
        ],201);
    }
}
