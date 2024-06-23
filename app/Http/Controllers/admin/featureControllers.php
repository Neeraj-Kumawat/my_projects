<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feature;

class featureControllers extends Controller
{
    public function add_feature()
    {
       
        $data = array();
        $data['customer'] = view('admin.folder.add-feature');
        return view('admin.home',$data);
       
    }
    public function feature_list()
    {

        $featureshow = Feature::all();        
        $data = array();
        $data['customer'] = view('admin.folder.feature-list' , compact('featureshow'));
        return view('admin.home',$data);      
       
    }
    public function feature_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'descripition' => 'required',
            'status' => 'required',
        ]);
    
    
        $feature = new Feature();
        $feature->title = $request['title'];
        $feature->descripition = $request['descripition'];
        $feature->status = $request['status'];
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); 
            $file->move(public_path('uploads'), $fileName);
            $feature->image = $fileName; 
        }
        
        $feature->save();
        
        return redirect('admin/feature-list')->with('success', 'Your data has been inserted successfully');
    }
    
    public function feature_edit($id)
    {

     $feature = Feature::find($id);
     if(is_null($feature)){
        return redirect('admin.folder.feature-list');
     }else{
        $data = compact('feature');
         $data['customer'] = view('admin.folder.edit-feature' , compact('feature'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function feature_update(Request $request,$id='')
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'descripition' => 'required',
            'status' => 'required',
        ]);
    $feature = new Feature();
    $data = array();
    $data['title'] = $request['title'];
    $data['descripition'] = $request['descripition'];
    $data['status'] = $request['status'];
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move(public_path('uploads'), $fileName);
        $data['image'] = $fileName;
    }
    $feature->UpdateRecord($id,$data); 
    return redirect('admin/feature-list')->with('Info','Enter your data Updata Successfully');


    }

    public function feature_delete($id)
    {
     Feature::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }


}
