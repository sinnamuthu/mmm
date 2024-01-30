<?php

namespace App\Http\Controllers;
use App\Models\Studentprofile;
use Illuminate\Http\Request;

class StudentprofileController extends Controller
{

     protected $student;


    public function __construct(){
        $this->student = new Studentprofile();
     }

    public function index()
    {
        
        return view('/learn/studentprofile');

    }

    //createstudent
                public function createstudent()
            {
            
                return view('/learn/studentprofile');
            }

                public function addstudent(Request $request)
            {
                //dd($request);
                $this->student->create($request->all());
               // session()->flash('success', 'Student Created successfully.');
                return redirect()->back();
            }

            // public function store(Request $request)
            // {
            //     dd($request);
            //     // $this->student->create($request->all());
            //     // session()->flash('success', 'Student Created successfully.');
            //     // return redirect()->back();
            // }
}
