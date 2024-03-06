<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

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
}
