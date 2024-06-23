<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkingHours;

class WorkingHoursContactControllers extends Controller
{
    public function add_hours()
    {
       
        $data = array();
        $data['customer'] = view('admin.folder.add-hours');
        return view('admin.home',$data);
       
    }
    public function hours_list()
    {

        $hours = WorkingHours::all();      
        $data = array();
      
        $data['customer'] = view('admin.folder.hours-list', compact('hours')  );
        return view('admin.home',$data);      
       
    }

    public function hours_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        

        $hours = new WorkingHours();
        $hours->title = $request['title'];
        $hours->status = $request['status'];
        $hours->save();
        return redirect('admin/hours-list')->with('success', 'Your data has been inserted successfully');
    }
    
    public function hours_edit($id)
    {
     $hours = WorkingHours::find($id);
     if(is_null($hours)){
        return redirect('admin.folder.hours-list');
     }else{
        $data = compact('hours');
         $data['customer'] = view('admin.folder.edit-hours' , compact('hours'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function hours_update(Request $request,$id='')
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
    $hours = new WorkingHours();
    $data = array();
    $data['title'] = $request['title'];
    $data['status'] = $request['status'];
    $hours->UpdateRecord($id,$data); 
    return redirect('admin/hours-list')->with('Info','Enter your data Updata Successfully');


    }

    public function hours_delete($id)
    {
    
    WorkingHours::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }
}
