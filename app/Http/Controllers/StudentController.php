<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentInfo(){



        $info = ['id' => '1', 'First name' => 'SaraAmr' ,'Last name' => 'Sami','email' => 'sara@gmail.com' , 'phone' => '0592973168' , 'College NO' => '1'] ;

        return view('pages.StudentInfo')->with('info', $info);

        }


}
