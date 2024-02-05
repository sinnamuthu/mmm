<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\createbatch;

class DasboardController extends Controller
{
    //
    public function index()
    {
        $batches = createbatch::all();
        return view('admin.admindashboard', ['batches' => $batches]);
    }
}
