<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function create()
    {
        return view('Student.create');
    }
    function createSubmit(Request $req)
    {

        $this->validate($req,
             [
                "name"=>"required|max:20",
                "dob"=>"required",
                "email"=>'required|email|unique:students,email',
                "password"=>"required|min:8",
                "conf_password"=>"required|same:password",
                "gender"=>"required",
                "phone number"=>"required"
             ],
             [
                 "name.required"=> "Please provide your name",
                 "name.max"=> "Name should not exceed 20 characters"
             ]
            );

            $s1 = new Student();
            $s1->name = $req->name;
            $s1->dob = $req->dob;
            $s1->email = $req->email;
            $s1->password = $req->password;
            $s1->phone_number = $req->phone_number;
            $s1->save();            
        return redirect()->intended('/student/login');
    }
    function login()
    {
        return view('Login');
    }
    function loginSubmit(Request $req)
    {
        $req->validate
        ([
            'email' => 'required|email',
            'password'=> 'required|min:8',
        ]);

        $user = Student::where('email',$req->email)->where('password',$req->password)->first();
        if($user){
            return redirect()->route('student.list');
        }

    return "Login Sucessfully";
    }
}
