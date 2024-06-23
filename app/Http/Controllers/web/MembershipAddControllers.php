<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Membership;
use App\Models\Team;
use App\Models\MembershipAdd;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MembershipAddControllers extends Controller
{
    public function membership_success()
    {
       
        $data = array();
        $data['customerweb'] = view('web.file.membership-add');
        return view('web.home',$data);
       
    }

    public function exportCSV(Request $request)
    {
        $query = MembershipAdd::query()->with('user'); 

        $memberships = $query->get();
    

        $callback = function() use ($memberships) {
            $file = fopen('php://output', 'w');
            
            fputcsv($file, ['ID', 'User ID', 'Username','email','Features','Membership', 'Year',  'Current Date', '30 Days']);
    

            foreach ($memberships as $membership) {
                fputcsv($file, [
                    $membership->id, 
                    $membership->user_id, 
                    $membership->user->username, 
                    $membership->user->email, 
                    $membership->product, 
                    $membership->username, 
                    $membership->year, 
                    $membership->current_date, 
                    $membership->date_30_days_from_now,
                ]);
            }
            
            fclose($file);
        };
    

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="memberships.csv"',
        ];
    
        return response()->stream($callback, 200, $headers);
    }




    public function membership_add($id)
    {
        $loggedInUser = Auth::user();
        $existingMembership = MembershipAdd::where('user_id', $loggedInUser->id)->first();
    
        if ($existingMembership && $existingMembership->date_30_days_from_now > date("Y-m-d")) {
            return redirect()->back()->with('error', 'Your mem  bership plan is still active. Please wait until it expires before renewing.');
        }
    
        $membership = Membership::find($id);
        $newMembership = new MembershipAdd();
        $newMembership->username = $membership->title;
        $newMembership->year = $membership->year;
        $newMembership->product = $membership->product;
        $newMembership->user_id = $loggedInUser->id;
        $newMembership->current_date = Carbon::now()->toDateString();
        $newMembership->date_30_days_from_now = Carbon::now()->addDays(30)->toDateString();
        $newMembership->save();
    
        return redirect('membership/success')->with('message', 'Your membership has been added successfully');
    }

    public function membership_logout()
    {
        Auth::guard('web')->logout();
        return redirect('web-login')->with('success', 'Logout successful.');
    }


    public  function web_login_page(){

        $loggedInUser = Auth::user();
        $data = array();
        $data['customerweb'] = view('web.file.my-profile', compact('loggedInUser'));
        return view('web.home',$data);

    }

    public  function membership_purchase(){
      
      
        $membership = Membership::all();  
        $registered = User::all();  
        $membershippurchase = MembershipAdd::all(); 
        $data = array();
        $data['customer'] = view('admin.folder.membership-purchase-list', compact('membershippurchase','registered','membership'));
        return view('admin.home',$data);

    }

    public function membership_delete($id){
        MembershipAdd::find($id)->delete();
        return redirect()->back()->with('Danger','Data Deleted Successfully');
    }

    
  
   
}
