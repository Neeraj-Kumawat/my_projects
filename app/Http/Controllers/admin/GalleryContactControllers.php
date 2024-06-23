<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryContactControllers extends Controller
{
    public function add_gallery()
    {
       
        $data = array();
        $data['customer'] = view('admin.folder.add-gallery');
        return view('admin.home',$data);
       
    }
    public function gallery_list()
    {

         $gallery = Gallery::all();    
        $data = array();
        $data['customer'] = view('admin.folder.gallery-list' ,compact('gallery'));
        return view('admin.home',$data);      
       
    }

    public function gallery_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);
    
    
        $gallery = new Gallery();
        $gallery->title = $request['title'];
        
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); 
            $file->move(public_path('gallery'), $fileName);
            $gallery->img = $fileName; 
        }
        
        $gallery->save();
        
        return redirect('admin/gallery-list')->with('success', 'Your data has been inserted successfully');
    }


    public function gallery_edit($id)
    {

     $gallery = Gallery::find($id);
     if(is_null($gallery)){
        return redirect('admin.folder.gallery-list');
     }else{
        $data = compact('gallery');
         $data['customer'] = view('admin.folder.edit-gallery' , compact('gallery'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function gallery_update(Request $request,$id='')
    {
        $validatedData = $request->validate([
            'title' => 'required',

        ]);
    $gallery = new Gallery();
    $data = array();
    $data['title'] = $request['title'];
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $fileName = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move(public_path('gallery'), $fileName);
        $data['img'] = $fileName;
    }
    $gallery->UpdateRecord($id,$data); 
    return redirect('admin/gallery-list')->with('Info','Enter your data Updata Successfully');

    }

    public function gallery_delete($id)
    {
        Gallery::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }
}
