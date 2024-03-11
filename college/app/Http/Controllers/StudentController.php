<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;
session_start();

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
            $request->session()->put('result', $result);
            $d_password=convert_uudecode($result['password']);
            if($d_password===$pass){
                return view('show')->with('result',$result);
            }else{
                return "Password Mismatch";
            }
        }

    }

    public function signout(){        
        session()->flush();
        return redirect('/');
    }

    public function showAll(){
        $user = new StudentModel();
        $result = $user->showall();        
        return view("showAll")->with("result",$result);
    }

    public function teacher(){
        $user = new StudentModel();
        $result = $user->teacher();        
        return view("teacher")->with("result",$result);
    }

    public function deactive(){
        $user = new StudentModel();
        $result = $user->deactive();        
        return view("deactive")->with("result",$result);
    }

    public function retrive($email){
        $user = new StudentModel();
        $result = $user->retrive($email);
        if($result){
        return redirect('/showAll');}
        else{
            echo "<script>alert('Popup message: Error');</script>"; 
        }
    }

    public function edit($email){
        $user = new StudentModel();
        $result = $user->edit($email);
        return view("edit")->with("result",$result);
    }

    public function editsubmit(Request $request,$email){
            $name= $request->name;
            $department= $request->dept;
            $phone=$request->phone;
        $user = new StudentModel();
        $user->editsubmit($email,$name,$department,$phone);
        if($user){
         echo "<script>alert('Popup message: Data Added Successfully');</script>";
         return redirect('/showAll');}
         else{
            echo "<script>alert('Popup message: Error');</script>";
         }
    }

    public function filter(Request $request, $role){
        $dept=$request->filter;
        $user = new StudentModel();
       $result= $user->filter($dept,$role);
        if($result){
            if($role=="Student"){
                return view("showAll")->with("result",$result);}
            else{
                return view("teacher")->with("result",$result); 
            }
        }
            else{
               echo "<script>alert('Popup message: Error');</script>";
            }
    }
    
    public function delet(Request $request){
        $email=$request->email;
        $user = new StudentModel();
        $user->delet($email);
        if($user){
        echo "<script>alert('Popup message: Deleted Successfully');</script>";
        return redirect('/showAll');}
        else{
            echo "<script>alert('Popup message: Error');</script>";
        }
    }
}
