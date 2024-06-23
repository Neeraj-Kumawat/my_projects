<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkingHours;
use App\Models\WorkingTime;


class WorkingTimeContactControllers extends Controller
{
    public function add_time()
    {
        $hours = WorkingHours::where('status', 'active')->get(); 
        $data = array();
        $data['customer'] = view('admin.folder.add-time', compact('hours') );
        return view('admin.home',$data);
       
    }
    public function time_list()
    {

        $time = WorkingTime::all();       
        $data = array();
        $data['customer'] = view('admin.folder.time-list' , compact('time'));
        return view('admin.home',$data);      
       
    }

    public function time_store(Request $request)
    {
        $validatedData = $request->validate([
            'categoery_id' => 'required',
            'time' => 'required',
            'class_type' => 'required',
            'coach_name' => 'required',
            'status' => 'required',
        ]);
        

        $time = new WorkingTime();
        $time->categoery_id = $request['categoery_id'];
        $time->time = $request['time'];
        $time->class_type = $request['class_type'];
        $time->coach_name = $request['coach_name'];
        $time->status = $request['status'];
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); 
            $file->move(public_path('uploads'), $fileName);
            $time->img = $fileName; 
        }
        $time->save();
        return redirect('admin/time-list')->with('success', 'Your data has been inserted successfully');
    }
    
    public function time_edit($id)
    {
        $hours = WorkingHours::where('status', 'active')->get(); 
     $time = WorkingTime::find($id);
     if(is_null($time)){
        return redirect('admin.folder.time-list');
     }else{
        $data = compact('time');
         $data['customer'] = view('admin.folder.edit-time' , compact('time','hours'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function time_update(Request $request,$id='')
    {

        // $validatedData = $request->validate([
        //     'categoery_id' => 'required',
        //     'time' => 'required', 
        //     'class_type' => 'required',
        //     'coach_name' => 'required',
        //     'status' => 'required', 
        // ]);

   
    $time = new WorkingTime();
    $data = array();
    $data['categoery_id'] = $request['categoery_id'];
    $data['time'] = $request['time'];
    $data['class_type'] = $request['class_type'];
    $data['coach_name'] = $request['coach_name'];
    $data['status'] = $request['status'];
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $fileName = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move(public_path('uploads'), $fileName);
        $time->img = $fileName; 
    }
    $time->UpdateRecord($id,$data); 
    return redirect('admin/time-list')->with('Info','Enter your data Updata Successfully');


    }

    public function time_delete($id)
    {
        
        WorkingTime::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }

}
