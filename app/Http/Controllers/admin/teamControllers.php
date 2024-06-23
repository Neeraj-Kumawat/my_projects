<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\team;

class teamControllers extends Controller
{
    public function add_team()
    {
        $data = array();
        $data['customer'] = view('admin.folder.add-team');
        return view('admin.home',$data);
       
    }
    public function team_list()
    {

        $teamshow = Team::all();        
        $data = array();
        $data['customer'] = view('admin.folder.team-list' , compact('teamshow'));
        return view('admin.home',$data);      

    }

    public function team_store(Request $request)
    {
    
        $validatedData = $request->validate([
            'name' => 'required',
            'short_descripition' => 'required',
            'status' => 'required',
        ]);
    
    
        $team = new Team();
        $team->name = $request['name'];
        $team->short_descripition = $request['short_descripition'];
        $team->facebook = $request['facebook'];
        $team->instagram = $request['instagram'];
        $team->twitter = $request['twitter'];
        $team->linkedin = $request['linkedin'];
        $team->status = $request['status'];
        
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); 
            $file->move(public_path('photo'), $fileName);
            $team->img = $fileName; 
        }
        
        $team->save();
        
        return redirect('admin/team-list')->with('success', 'Your data has been inserted successfully');
    }

    public function team_edit($id)
    {

     $team = Team::find($id);
     if(is_null($team)){
        return redirect('admin.folder.team-list');
     }else{
        $data = compact('team');
         $data['customer'] = view('admin.folder.edit-team' , compact('team'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function team_update(Request $request,$id='')
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'short_descripition' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'status' => 'required',
        ]);
    $team = new Team();
    $data = array();
    $data['name'] = $request['name'];
    $data['short_descripition'] = $request['short_descripition'];
    $data['facebook'] = $request['facebook'];
    $data['instagram'] = $request['instagram'];
    $data['twitter'] = $request['twitter'];
    $data['linkedin'] = $request['linkedin'];
    $data['status'] = $request['status'];
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $fileName = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move(public_path('photo'), $fileName);
        $data['img'] = $fileName;
    }
    $team->UpdateRecord($id,$data); 
    return redirect('admin/team-list')->with('Info','Enter your data Updata Successfully');


    }

    public function team_delete($id)
    {
     Team::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }
  
    

}
