<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class AdminController extends Controller
{

    protected $profile;

    public function __construct(){
       $this->profile = new Profile();
    }

    //

    public function edit($encryptedId)
    {
        // Decrypt the ID value
        $decryptedId = base64_decode($encryptedId);
    
        // Retrieve the profile based on the decrypted ID
        $profile = Profile::find($decryptedId);
    
        if (!$profile) {
            // Handle the case where the profile is not found
            abort(404);
        }
    
        $response['profile'][] = $profile;
    
        return view('admin.adminviewprofile')->with($response);
    }
}
