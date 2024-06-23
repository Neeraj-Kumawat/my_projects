<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\Settinges;

class contactControllers extends Controller
{
    public function contact_list()
    {
    
        $contact = Contact::all();  
        $data = array();
        $data['customer'] = view('admin.folder.contact-list' , compact('contact'));
        return view('admin.home',$data);
      
    }
    public function contact_update($id){
        $contact = Contact::find($id);
       
        if($contact){
          
            $contact->status = $contact->status ? 0 : 1;
            $contact->save();
        }
        return back()->with('Success', 'Testimonial status updated successfully.');
    }
    
}
