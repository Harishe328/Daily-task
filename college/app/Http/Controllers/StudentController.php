<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function registration(Request $request){
        $data=$request->except("_token");
        $user = new StudentModel();
        $result=$user->register($data);
        if($result){
            echo "<script>alert('Popup message: Data Added Successfully');</script>";
            return view('login');
        }
    }

    public function login(Request $request){
        $data = $request->except("_token");
    
        $email = $data['email'];
        $pass = $data['password'];
  
        $user = new StudentModel();

        $result = $user->login($email);
        if(!$result){
            return "Please Register first";
        }else{
            $d_roll=$result['roll'];
            $d_password=convert_uudecode($result['password']);
            if($d_password===$pass){
                return view('taskbar')->with('roll',$d_roll);
            }else{
                return "Password Mismatch";
            }
        }

    }
}
