<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        // $title ="Welcome to Programing Knowledge";
        $data=array(
            'title'=>'Service',
            'services'=> ['Web Design','Programming','SEO']
        );

        return view('pages.about')->with($data);
    }
}
