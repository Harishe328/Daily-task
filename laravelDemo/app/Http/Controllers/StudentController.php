<?php

namespace App\Http\Controllers;


use App\Models\studentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('pages.login');
    }
    public function login(Request $request){
        
        $data = $request->except("_token");

        $roll = $data['roll'];
        $pass = $data['password'];
  

        $user = studentModel::where("roll_no",$roll)->first();
        if(!$user){
            return "Please Register first";
        }else{
            $d_password=convert_uudecode($user['password']);
            if($d_password===$pass){
                return view("pages.show")->with("user",$user);
            }else{
                return "Password Mismatch";
            }
        }

    }
    public function registration(Request $request){
    $data=$request->except("_token");
    $registerModel = new studentModel();
    $registerModel->name       = $data['name'];
    $registerModel->roll_no      = $data['roll'];
    $registerModel->class     = $data['class'];
    $registerModel->total       = $data['total'];
    $registerModel->password = convert_uuencode($data['password']);
    $registerModel->save();
    dd("successfully created");
    }

    public function showAll(){
        $user=studentModel::all();
        return view("pages.showAll")->with("user",$user);
    }

    public function edit($id){
        $data=studentModel::where('roll_no',$id)->first();
        return view("pages.update")->with('data',$data);
    }
    public function editsubmit(Request $request,$id){
        $data = studentModel::where('roll_no',$id)->first();
        $data->update([
            'name'=> $request->name,
            'total'=> $request->total
        ]);
        return "Data updated sucessfully";
    }
}
