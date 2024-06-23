<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\team;
use App\Models\feature;
use App\Models\contact;
use App\Models\Settinges;
use App\Models\Blog;
use App\Models\Faqs;
use App\Models\Gallery;
use App\Models\WorkingHours;
use App\Models\WorkingTime;


class webControllers extends Controller
{


    
    public function home_page(Request $request, $id = "")
    {
       
        $data = array();
        $data['featureshow'] = feature::where('status', 'active')->orderBy('title')->orderBy('descripition')->orderBy('image')->get();
        $data['teamshow'] = Team::where('status', 'active')->orderBy('name')->orderBy('short_descripition')->orderBy('img')->get();
        $data['workinghours'] = WorkingHours::where('status', 'active')->orderBy('title')->get();
        if(isset($_GET['cat_id']))
      
        {
            $working_time = new WorkingTime();
            $data['CategoryProducts'] =  $working_time->GetProductbyProduct($_GET['cat_id']);
        }else{
            $data['CategoryProducts'] = [];
        }
       
        $data['customerweb'] = view('web.index',$data);
        return view('web.home',$data);
       
    }

    // public function day_hours(){
        

    //     $working_time = new WorkingTime(); // Instantiate WorkingTime model or adjust according to your application's logic
    
    //     $CategoryProducts =  $working_time->GetProductbyProduct($id);
    
    //     $teamshow = Team::orderBy('name')->orderBy('short_descripition')->orderBy('img')->get();
    
    //     $workinghours = WorkingHours::orderBy('title')->get();
    
    //     $data = array();
    
    //     $data['customerweb'] = view('web.index',compact('workinghours','teamshow','CategoryProducts'));
    
    //     return view('web.home',$data);
    
    // }
    

    public function about_page()
    {
       
        $data = array();
        $data['customerweb'] = view('web.file.about-us');
        return view('web.home',$data);
       
    }
    public function blog_page()
    {    
        $blogs = Blog::where('status', 'ACTIVE')
        ->orderBy('by_text')
        ->orderBy('by_date')
        ->orderBy('title')
        ->orderBy('descripition')
        ->orderBy('img')
        ->get();

foreach ($blogs as $blog) {
$blog->by_date = date('d M Y', strtotime($blog->by_date));
}
        $data = ['blogs' => $blogs];
        $customerView = view('web.file.blog', $data); 
        return view('web.home', ['customerweb' => $customerView]); 
    }
    
    public function faqs_page()
    {
        $faqs = Faqs::where('status', 'active')->get(); 
        $data = array();
        $data['customerweb'] = view('web.file.faqs' ,  compact('faqs'));
        return view('web.home',$data);
       
    }
    public function contact_page()
    {
         
        $data = array();
        $data['customerweb'] = view('web.file.contact-us');
        return view('web.home',$data);
       
    }
    public function gallery_page()
    {
        $gallery = Gallery::all(); 
        $data = array();
        $data['customerweb'] = view('web.file.gallery' ,compact('gallery'));
        return view('web.home',$data);
       
    }

    public function blog_single()
    {
       
        $data = array();
        $data['customerweb'] = view('web.file.blog-single');
        return view('web.home',$data);
       
    }

    public function contact_store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
    
    
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->status = rand(0, 1);
    
        if ($contact->save()) {
            return redirect()->back()->with('success', 'Your data has been inserted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to insert data. Please try again.');
        }
    }
    

    public function contact_delete($id)
    {
     Contact::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }



}
