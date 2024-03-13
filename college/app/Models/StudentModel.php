<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function register($data){
        $this->name       = $data['name'];
        $this->phone      = $data['phone'];
        $this->department     = $data['dept'];
        $this->roll     = $data['roll'];
        $this->email       = $data['email'];
        $this->password = convert_uuencode($data['password']);
        $this->save();
        return true;
    }

    public function login($email){
        return $this->where("email",$email)->first();
    }

    public function showall(){
        return $this->where("roll","Student")->where("status","Active")->paginate(5);
    }

    public function filter($dept,$role){
        return $this->where("department",$dept)->where("status","Active")->where("roll",$role)->paginate(5);
    }

    public function teacher(){
        return $this->where("roll","Teacher")->where("status","Active")->paginate(5);
    }

    public function deactive(){
        return $this->where("roll","Student")->where("status","Deactive")->get();
    }

    public function edit($email){
        return $this->where("email",$email)->first();
    }

    public function editsubmit($email,$name,$department,$phone){
        $data=$this->where('email',$email)->first();
        $data->update(['name'=>$name,
                        'department'=>$department,
                        'phone'=>$phone]);
        return $data;        
    }
    
    public function delet($email){
        $data=$this->where('email',$email)->first();
        $data->update([
            'status'=> "Deactive"
        ]);
        return $data;
    }

    public function retrive($email){
        $data=$this->where('email',$email)->first();
        $data->update([
            'status'=> "Active"
        ]);
        return $data;
    }

    public function count($department){
        $data=$this->where("status","Active")->where("department","$department")->count();
        return $data;
    }
}
