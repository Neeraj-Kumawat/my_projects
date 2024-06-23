<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feature;

class SubscribeControllers extends Controller
{
    public function subscribe()
    {

        $featureshow = Feature::all();        
        $data = array();
        $data['customer'] = view('admin.folder.feature-list' , compact('featureshow'));
        return view('admin.home',$data);      
       
    }
}
