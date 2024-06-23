<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopControllers extends Controller
{
    public function shop_page()
    {
       
        $data = array();
        $data['customerweb'] = view('web.file.shop');
        return view('web.home',$data);
       
    }
    public function shop_single_page()
    {
       
        $data = array();
        $data['customerweb'] = view('web.file.shop-single');
        return view('web.home',$data);
       
    }

    public function shop_cart_page()
    {
       
        $data = array();
        $data['customerweb'] = view('web.file.shop-cart');
        return view('web.home',$data);
       
    }
    public function shop_checkout_page()
    {
       
        $data = array();
        $data['customerweb'] = view('web.file.shop-checkout');
        return view('web.home',$data);
       
    }
}
