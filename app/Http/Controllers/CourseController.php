<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(){
        //return all categorise
        $categories= Category::with('Store')->get();
         //dd($categories->toarray());


       // return response()->json($categories);
     return view('pages.showCourses')->with('courses', $courses);
    }

    public function Courses(){

       // $id =[1,2,3,4,5];
       // $courses = ["IT" , "Engineering" , "Medicine" ,"Nursing" ,"Education"];


        $courses = [['id' => '1', 'name' => 'IT'],
                    ['id' => '2', 'name' => 'Engineering'],
                    ['id' => '3', 'name' => 'Medicine' ],
                    ['id' => '4', 'name' => 'Nursing'],
                    ['id' => '5', 'name' => 'Education' ]];

        return view('pages.showCourses')->with('courses', $courses);

        }


        public function Home(){



        $courses = [['id' => '1', 'name' => 'IT'],
        ['id' => '2', 'name' => 'Engineering'],
        ['id' => '3', 'name' => 'Medicine' ],
        ['id' => '4', 'name' => 'Nursing'],
        ['id' => '5', 'name' => 'Education' ]];

return view('Homepage')->with('courses', $courses);


}



}
