<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileContactControllers extends Controller
{
 
    public function profile()
    {
        $loggedInAdmin = Auth::user();
        $profile = Profile::all();     
        $data = array();
        $data['customer'] = view('admin.folder.profile' , compact('profile','loggedInAdmin') );
        return view('admin.home',$data);      
       
    }
}
