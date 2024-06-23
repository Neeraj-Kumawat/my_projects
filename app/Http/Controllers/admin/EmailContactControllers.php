<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailContact;

class EmailContactControllers extends Controller
{
    public function subscribe()
    {

        $featureshow = EmailContact::all();        
        $data = array();
        $data['customer'] = view('admin.folder.subscribs' , compact('featureshow'));
        return view('admin.home',$data);      
       
    }


    public function store(Request $request)
    {
        if (EmailContact::where('email', $request->subemail)->exists()) {
            return redirect()->back()->withErrors(['subemail' => 'This email already exists.']);
        }
    
        $validatedData = $request->validate([
            'subemail' => 'required|email',
        ], [
            'subemail.required' => 'The email field is required.',
            'subemail.email' => 'Please provide a valid email address.',
        ]);
    
        $emailContact = new EmailContact();
        $emailContact->email = $validatedData['subemail'];
        $emailContact->save();
    
        return redirect()->back()->with('success', 'Email contact created successfully');
    }


    public function subscribe_delete($id){
    
        EmailContact::find($id)->delete();
        return redirect()->back()->with('Danger','Data Deleted Successfully');
    }
    
}
