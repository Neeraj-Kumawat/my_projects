<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipProduct;
use App\Models\Membership;
use App\Models\Faqs;

class MembershipProducControllers extends Controller
{
    public function membership_page()
    {
        $membership = Membership::all();  
        $faqs = Faqs::all();     
        $data = array();
        $data['customerweb'] = view('web.file.pricing-plans', compact('membership','faqs'));
        return view('web.home',$data);
       
    }

    public function add_produc()
    {
        $membership = Membership::all();  
        $data = array();
        $data['customer'] = view('admin.folder.add-produc' ,compact('membership'));
        return view('admin.home',$data);
       
    }
    public function produc_list()
    {
        
        $produc = MembershipProduct::all();     
        $data = array();
        $data['customer'] = view('admin.folder.produc-list', compact('produc') );
        return view('admin.home',$data);      
       
    }
    public function produc_store(Request $request)
    {
     
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required',
          
        ]);
        $produc = new MembershipProduct();
        $produc->title = $request['title'];
        $produc->status = $request['status'];
        $produc->save();
        return redirect('admin/product-list')->with('success', 'Your data has been inserted successfully');
    }


    public function produc_edit($id)
    {
     $produc = MembershipProduct::find($id);
     if(is_null($produc)){
        return redirect('admin.folder.produc-list');
     }else{
        $data = compact('produc');
         $data['customer'] = view('admin.folder.edit-produc' , compact('produc'));
         return view('admin.home',$data);   
   
        
     }
    }

    public function produc_update(Request $request,$id='')
    {
       
     
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
    $produc = new MembershipProduct();
    $data = array();
    $data['title'] = $request['title'];
    $data['status'] = $request['status'];

    $produc->UpdateRecord($id,$data); 
    return redirect('admin/product-list')->with('Info','Enter your data Updata Successfully');


    }

    public function produc_delete($id)
    {
       
        MembershipProduct::find($id)->delete();
     return redirect()->back()->with('Danger','Data Deleted Successfully');
    }
}
