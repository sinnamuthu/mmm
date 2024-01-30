<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Creatcourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    protected $course;
    protected $creatcourse;


    public function __construct(){
        $this->course = new Course();
        $this->creatcourse = new Creatcourse();
     }




   public function index()
   {
  

   }

   public function coursewatch()
{
  
     $sender_id = request('sender_id');
    $time = request('time');

     $response['coursewatch'] = Course::where('coursewatch_id', $sender_id)->update(['course_time' => $time]);
    // Return the updated data as JSON
    return response()->json($response);
}


public function coursedata()
{
  
     $sender_id = request('sender_id');

     $response['coursedata'] = Course::where('coursewatch_id', '=', $sender_id)->get();

    //  $response['coursewatch'] = Course::where('coursewatch_id', $sender_id)->update(['course_time' => $time]);
    // Return the updated data as JSON
    return response()->json($response);
}

   //createstudent
   public function createcourse()
   {
   
       return view('/learn/createcourse');
   }

   public function addcourse(Request $request)
   {
       //dd($request);
       $this->creatcourse->create($request->all());
      // session()->flash('success', 'Student Created successfully.');
       return redirect()->back();
   }
  

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    //    $this->appointment->create($request->all());
    //    return redirect()->back();
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
       
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Doctor $doctor)
   {
       //

   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Doctor $doctor)
   {


   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       //
   }
 
}
