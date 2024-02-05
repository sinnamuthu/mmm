<?php

namespace App\Http\Controllers;

use App\Models\createbatch;
use Illuminate\Bus\Batch;
use Illuminate\Http\Request;
use Carbon\Carbon; 

class BatchController extends Controller
{
    public function index(Request $request)
    {
        $batches = CreateBatch::all(); 
        return view('admin.batch', ['batches' => $batches]);
    }

    public function store(Request $request)
    {
       
    $batch = new CreateBatch;
    $batch->bt_innertitle = $request->bt_innertitle;
    $batch->status = $request->status;

    // Retrieve start and end dates from the form
    $dateRange = explode(' - ', $request->dates);

    $startDate = Carbon::createFromFormat('m/d/Y', $dateRange[0])->toDateString();
    $endDate = Carbon::createFromFormat('m/d/Y', $dateRange[1])->toDateString();

    // Store date components
    $batch->year = Carbon::parse($startDate)->year;
    $batch->start_date = $startDate;
    $batch->end_date = $endDate;

    $batch->save();

    return redirect()->route('batch')->with('success', 'Batch added successfully!');
    }
}
