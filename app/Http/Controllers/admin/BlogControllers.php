<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;

class BlogControllers extends Controller
{
    public function add_blog()
    {
       
        $data = array();
        $data['customer'] = view('admin.folder.add-blog');
        return view('admin.home',$data);
       
    }

 
    public function blog_list()
    {
        $blogs = Blog::all();       
        foreach ($blogs as $blog) {
            $blog->by_date = date('d M Y', strtotime($blog->by_date));
        }
    
        $data = ['blogs' => $blogs]; 
        $customerView = view('admin.folder.blog-list', $data);
        return view('admin.home', ['customer' => $customerView]); 
    }
    
    public function blog_store(Request $request)
    {
        $validatedData = $request->validate([
            'by_text' => 'required',
            'by_date' => 'required',
            'title' => 'required',
            'descripition' => 'required',
            'status' => 'required',
        ]);
         

    
    
        $blog = new Blog();
        
        $blog->by_text = $request['by_text'];
        $blog->by_date = Carbon::parse($request->by_date)->format('Y-m-d');
        $blog->title = $request['title'];
        $blog->descripition = $request['descripition'];
        $blog->status = $request['status'];
        
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); 
            $file->move(public_path('blog'), $fileName);
            $blog->img = $fileName; 
        }
        
        $blog->save();
        
        return redirect('admin/blog-list')->with('success', 'Your data has been inserted successfully');
    }

    // $blog->by_date = $request['by_date'];

    public function blog_edit($id)
    {

     $blog = Blog::find($id);
     if(is_null($blog)){
        return redirect('admin.folder.blog-list');
     }else{
        $data = compact('blog');
         $data['customer'] = view('admin.folder.edit-blog' , compact('blog'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function blog_update(Request $request,$id='')
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'descripition' => 'required',
            'status' => 'required',
        ]);
    $blog = new Blog();
    $data = array();
    $data['by_text'] = $request['by_text'];
    $data['by_date'] = $request['by_date'];
    $data['title'] = $request['title'];
    $data['descripition'] = $request['descripition'];
    $data['status'] = $request['status'];
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $fileName = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move(public_path('blog'), $fileName);
        $data['img'] = $fileName;
    }
    $blog->UpdateRecord($id,$data); 
    return redirect('admin/blog-list')->with('Info','Enter your data Updata Successfully');


    }

    public function blog_delete($id)
    {
     Blog::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }
    
}
