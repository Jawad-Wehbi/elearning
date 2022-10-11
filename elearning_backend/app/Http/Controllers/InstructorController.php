<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
