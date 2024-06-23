<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\Faqs;
use App\Models\MembershipProduct;

class MembershipContactControllers extends Controller
{
    public function membership_page()
    {
        $membership = Membership::all();  
        $productmembership = MembershipProduct::all();  
        $faqs = Faqs::all();     
        $data = array();
        $data['customerweb'] = view('web.file.pricing-plans', compact('membership','faqs','productmembership'));
        return view('web.home',$data);
       
    }

    public function add_membership()
    {
        $product = MembershipProduct::where('status', 'active')->get(); 
        $data = array();
        $data['customer'] = view('admin.folder.add-membership', compact('product'));
        return view('admin.home',$data);
       
    }
    public function membership_list()
    {

        $membership = Membership::all();       
        $data = array();
        $data['customer'] = view('admin.folder.membership-list' , compact('membership') );
        return view('admin.home',$data);      
       
    }
    public function membership_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'descripition' => 'required',
            'year' => 'required',
        ]);
    
    
        $membership = new Membership();
        $membership->title = $request['title'];
        $membership->descripition = $request['descripition'];
        $membership->year = $request['year'];
        $membership->product = implode(',',$request->product);
        
        $membership->save();
        return redirect('admin/membership-list')->with('success', 'Your data has been inserted successfully');
    }


    public function membership_edit($id)
    {
        $product = MembershipProduct::where('status', 'active')->get(); 
     $membership = Membership::find($id);
     if(is_null($membership)){
        return redirect('admin.folder.membership-list');
     }else{
        $data = compact('membership');
         $data['customer'] = view('admin.folder.edit-membership' , compact('membership','product'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function membership_update(Request $request,$id='')
    {
     
        $validatedData = $request->validate([
            'title' => 'required',
            'descripition' => 'required',
            'year' => 'required',
        ]);
    $membership = new Membership();
    $data = array();
    $data['title'] = $request['title'];
    $data['descripition'] = $request['descripition'];
    $data['year'] = $request['year'];
    $data['product'] = implode(',',$request->product);

    $membership->UpdateRecord($id,$data); 
    return redirect('admin/membership-list')->with('Info','Enter your data Updata Successfully');


    }

    public function membership_delete($id)
    {
        
        Membership::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }

   
}
