<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faqs;
class FaqsContactControllers extends Controller
{
    public function add_faqs()
    {
       
        $data = array();
        $data['customer'] = view('admin.folder.add-faqs');
        return view('admin.home',$data);
       
    }
    public function faqs_list()
    {

        $faqs = Faqs::all();       
        $data = array();
        $data['customer'] = view('admin.folder.faqs-list',compact('faqs') );
        return view('admin.home',$data);      
       
    }

    public function faqs_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);
    
    
        $faqs = new Faqs();
        $faqs->title = $request['title'];
        $faqs->content = $request['content'];
        $faqs->status = $request['status'];
        
        $faqs->save();
        
        return redirect('admin/faqs-list')->with('success', 'Your data has been inserted successfully');
    }


    public function faqs_edit($id)
    {
       
     $faqs = Faqs::find($id);
     if(is_null($faqs)){
        return redirect('admin.folder.faqs-list');
     }else{
        $data = compact('faqs');
         $data['customer'] = view('admin.folder.edit-faqs' , compact('faqs'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function faqs_update(Request $request,$id='')
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);
    $faqs = new Faqs();
    $data = array();
    $data['title'] = $request['title'];
    $data['content'] = $request['content'];
    $data['status'] = $request['status'];

    $faqs->UpdateRecord($id,$data); 
    return redirect('admin/faqs-list')->with('Info','Enter your data Updata Successfully');


    }

    public function faqs_delete($id)
    {

     Faqs::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }

}
