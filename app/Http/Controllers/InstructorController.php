<?php

namespace App\Http\Controllers;

use App\Models\createInstructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class InstructorController extends Controller
{
    //

    protected $instructor;
    public function index(Request $request){
        $instructors = createInstructor::all();
       
        return view('admin.instructor-process', compact('instructors'));

    }

    public function store(Request $request)
    {
        
       
      
          
        
   
        // If validation passes, create a new Instructor instance
        $instructor = new createInstructor;
        
        // Assign form data to the model
        $instructor->ins_fname = $request->ins_fname;
        $instructor->ins_lname = $request->ins_lname;
        $instructor->ins_mailid = $request->ins_mailid;
        $instructor->ins_pass = $request->ins_pass; 
        $instructor->ins_mob = $request->ins_mob;
        $instructor->ins_intname = $request->ins_intname;
        $instructor->ins_imstqua = $request->ins_imstqua;
        $instructor->ins_bdescription = $request->ins_bdescription;
        
        // Save the model to the database
        $instructor->save();
        
        // Redirect with success message
        return redirect()->route('instructor')->with('success', 'Instructor added successfully!');
        
    
}
    public function addcourse(Request $request)
    {
        
    }
    public function destroy ($request)
    {
        createInstructor::where('instructor_id',$request)->delete();
        session()->flash('success', 'Instructor Deleted Successfully.');
        return back(); 
    }
}
