<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assignment;
use App\Models\Announcement;

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

    public function addAnnouncement(Request $request)
    {
        $announcement = new Announcement();
        $announcement->announcement_title = $request->get('announcement_title');
        $announcement->announcement_content = $request->get('announcement_content');
        $announcement->save();
        return response()->json([
            'message'=>'Announcement has been successfully added',
            'status'=>'201',
            'announcement'=>$announcement
        ],201);
    }
}
