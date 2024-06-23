<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        $user = User::where('role', 'customer')
             ->orderBy('id', 'desc') 
             ->get();
        $data = array();
        $data['customer'] = view('admin.folder.user-list', compact('user'));
        return view('admin.home',$data);
       
    }
    
    public function user_update($id){

        $user = User::find($id);
       
        if($user){
          
            $user->status = $user->status ? 0 : 1;
            $user->save();
        }
        return back()->with('Success', 'Testimonial status updated successfully.');
    }
}
