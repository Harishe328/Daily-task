<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function add_department($data){
        $this->department       = $data['department'];
        $this->d_shortterm     = $data['d_st'];
        $this->save();
        return true;
    }


    public function all_Department(){
        return $this->where("status","Active")->get();
    }

    public function delete_dept($department){
        $data=$this->where('department',$department)->first();
        $data->update([
            'status'=> "Deactive"
        ]);
    }

}
