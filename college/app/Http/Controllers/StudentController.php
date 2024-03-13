<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\DepartmentModel;
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
            echo "<script>alert('Popup message: Data Added Successfully');
            window.location.href = 'login';
            </script>";
            
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
        $user1 = new DepartmentModel();
        $result1 = $user1->all_Department();                
        return view("showAll")->with("result",$result)->with("result1",$result1);
    }

    public function teacher(){
        $user = new StudentModel();
        $result = $user->teacher();  
        $user1 = new DepartmentModel();
        $result1 = $user1->all_Department();       
        return view("teacher")->with("result",$result)->with("result1",$result1);
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
         echo "<script>alert('Popup message: Data Added Successfully');
         window.location.href = '/showAll';
         </script>";
         }
         else{
            echo "<script>alert('Popup message: Error');</script>";
         }
    }

    public function filter(Request $request, $role){
        $dept=$request->filter;
        $user = new StudentModel();
        $result= $user->filter($dept,$role);
        $user1 = new DepartmentModel();
        $result1 = $user1->all_Department();
        if($result){
            if($role=="Student"){
                return view("showAll")->with("result",$result)->with("result1",$result1);}
            else{
                return view("teacher")->with("result",$result)->with("result1",$result1); 
            }
        }
            else{
               echo "<script>alert('Popup message: Error');</script>";
            }
    }
    
    public function delet($email){
        $user = new StudentModel();
        $user->delet($email);
        if($user){
        echo "<script>alert('Popup message: Deleted Successfully');
        window.location.href = '/showAll';
        </script>";
        }
        else{
            echo "<script>alert('Popup message: Error');</script>";
        }
    }

    public function department(){
        $user = new DepartmentModel();
        $result = $user->all_Department();        
        return view("department")->with("result",$result);
    }

    public function add_department(Request $request){
        $data=$request->except("_token");
        $user = new DepartmentModel();
        $result=$user->add_department($data);
        if($result){
            echo "<script>alert('Popup message: Data Added Successfully');
            window.location.href = '/department';
            </script>";
            ;
        }
    }

    public function department_option(){
        $user = new DepartmentModel();
        $result = $user->all_Department();        
        return view("register")->with("result",$result);
    }

    public function delete_dept($department){
        $user = new StudentModel();
        $result = $user->count($department); 
        // echo $result;
        // exit;
        if($result<0){ 
        $user = new DepartmentModel();
        $user->delete_dept($department);
        return redirect('/department');}
        else{
             echo "<script>alert('Popup message: Student are studying in this department');
             window.location.href = '/department';
             </script>";
           
        }
    }
}
