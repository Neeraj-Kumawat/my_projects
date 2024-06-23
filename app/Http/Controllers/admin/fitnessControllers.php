<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MembershipAdd;

class fitnessControllers extends Controller
{

      public function welcome()
    {
       
        $membershipAddCount = MembershipAdd::count();
        $activeCustomerCount = User::where('role', 'customer')->where('status', 1)->count();
        $inactiveCustomerCount = User::where('role', 'customer')->where('status', 0)->count();
        $customerCount = User::where('role', 'customer')->count();
        $data = array();
        $data['customer'] = view('admin.index', compact('customerCount','activeCustomerCount','inactiveCustomerCount','membershipAddCount'));
        return view('admin.home',$data);
       
    }
   
}
