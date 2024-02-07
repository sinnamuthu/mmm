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
        $instructors = createInstructor::paginate(5);
       
        return view('admin.instructor-process', compact('instructors'));

    }

    public function store(Request $request)
    {
           
        $instructor = new createInstructor;
        
       
        $instructor->ins_fname = $request->ins_fname;
        $instructor->ins_lname = $request->ins_lname;
        $instructor->ins_mailid = $request->ins_mailid;
        $instructor->ins_pass = $request->ins_pass; 
        $instructor->ins_mob = $request->ins_mob;
        $instructor->ins_intname = $request->ins_intname;
        $instructor->ins_imstqua = $request->ins_imstqua;
        $instructor->ins_bdescription = $request->ins_bdescription;
        
        if ($request->hasFile('instructor_image')) {
            $imageName = time().'.'.$request->file('instructor_image')->extension();
            $request->file('instructor_image')->move(public_path('instructorimg'), $imageName);
            $instructor->instructor_image = $imageName;
        }
        $instructor->save();
        
        return redirect()->route('instructor')->with('success', 'Instructor added successfully!');
        
    
}
    public function edit($instructor_id)
    {
        $instructor = createInstructor::find($instructor_id);
        return view('admin.edit-instructor', compact('instructor'));
    }
    public function destroy ($request)
    {
        createInstructor::where('instructor_id',$request)->delete();
        session()->flash('success', 'Instructor Deleted Successfully.');
        return back(); 
    }

        public function update(Request $request, $instructor_id)
        {
            $instructor = createInstructor::find($instructor_id);

            if (!$instructor) {
                return redirect()->route('error');
            }

            $instructor->update([
                'ins_fname' => $request->input('ins_fname'),
                'ins_lname'=> $request->input('ins_lname'),
                'ins_mailid'=>$request->input('ins_mailid'),
                'ins_pass'=> $request->input('ins_pass'),
                'ins_mob' => $request->input('ins_mob'),
                'ins_intname' => $request->input('ins_intname'),
                'ins_imstqua' => $request->input('ins_imstqua'),
                'ins_bdescription' => $request->input('ins_bdescription'),
                
            ]);
            if ($request->hasFile('instructor_image')) {
                $imageName = time().'.'.$request->file('instructor_image')->extension();
                $request->file('instructor_image')->move(public_path('instructorimg'), $imageName);
                $instructor->instructor_image = $imageName;
            }
        
           
            $instructor->save();

            return redirect()->route('instructor')->with('success', 'Instructor updated successfully');
        }


}
