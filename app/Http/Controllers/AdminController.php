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

    public function update(Request $request, $id)
    {
       
       
        $profile = Profile::find($id);
      

        $request->validate([
            'hospitalname'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $input = $request->all();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('adminprofile'), $imageName);
    
            $input['image'] = $imageName;
        }
        else{
            $input['image'] = $request->image_name;
        }

       // dd($input);
    
        $profile->update($input);

        session()->flash('success', 'Profile Updated Successfully.');

        return back();
    }
}
