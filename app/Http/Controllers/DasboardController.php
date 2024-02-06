<?php

namespace App\Http\Controllers;



use App\Models\createInstructor;
use Illuminate\Http\Request;
use App\Models\createbatch;


class DasboardController extends Controller
{
    //
    public function index()
    {
        $batches = createbatch::all();
        $instructor = createInstructor::all();
        return view('admin.admindashboard', [
            'batches' => $batches,
            'instructors' => $instructor,
        ]);
    }
}
