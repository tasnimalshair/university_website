<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterSemesterController extends Controller
{
    public function Courses(){

       // $id =[1,2,3,4,5];
       // $courses = ["IT" , "Engineering" , "Medicine" ,"Nursing" ,"Education"];


        $courses = [['id' => '1', 'name' => 'Database'],
                    ['id' => '2', 'name' => 'Data Structure'],
                    ['id' => '3', 'name' => 'Web Programming' ],
                    ['id' => '4', 'name' => 'Discrete Mathematics'],
                    ['id' => '5', 'name' => 'Java Programming' ]];

        return view('pages.RegisterSemester')->with('courses', $courses);

        }



}
