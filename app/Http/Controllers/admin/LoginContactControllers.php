<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginContactControllers extends Controller
{
    

    public function web_login_page()
    {     
        $data = array();
        $data['customerweb'] = view('web.login');
        return view('web.home',$data);
     
    }

    public function login_page()
    {     
        return view('admin.login');
       
    }
    public function register_page()
    {     
        return view('admin.register');
       
    }

    public function registered_store(Request $request)
    {       
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|string|min:6', 
            'confirm_password' => 'required|same:password',
        ]);
    
    
        $registered = new User();
        $registered->role = 'customer';
        $registered->username = $request['username'];
        $registered->email = $request['email'];
        $registered->password = Hash::make($request->password);
        $registered->confirm_password =  Hash::make($request->confirm_password);
        
        $registered->save();
        return redirect()->back()->with('success', 'Your data has been inserted successfully');
    }

    public function login_store(Request $request)
    {
        
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6', 
        ],[
            'email.required' => 'please enter your email adddress',
            'email.email' =>  'please enter your another email',
            'password.required' => 'please enter your password',
        ]);
      $login = User::where('email', $validatedData['email'])->first();
      if($login && Hash::check($validatedData['password'],$login->password) && $login->role == 'super_admin'){
        Auth::Login($login);
        $loggedInAdmin = Auth::user();
        return redirect()->intended('admin')->with('success', 'welcome back, ' . $login->username."!");
  }else{
    return redirect('login')->with('error', 'Invalid Credential')->withInput($request->only('email'));
  }
    }
    public function customer_login_store(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:6', 
    ],[
        'email.required' => 'Please enter your email address',
        'email.email' =>  'Please enter a valid email address',
        'password.required' => 'Please enter your password',
    ]);

    $login = User::where('email', $validatedData['email'])->first();

    if ($login && Hash::check($validatedData['password'], $login->password) && $login->role == 'customer') {
        Auth::login($login); 
        $loggedInUser = Auth::user();
                
        return redirect()->intended('/')->with('success', 'Welcome back, '.$loggedInUser->username.'!');
    } else {
        return redirect('web-login')->with('error', 'Invalid credentials')->withInput($request->only('email'));
    }
}

public function changePassword(Request $request)
{
    
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required',
        'confirm_password' => 'required',
    ]);

    $loggedInAdmin = Auth::user();

    if (!Hash::check($request->old_password, $loggedInAdmin->password)) {
        return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
    }

    $loggedInAdmin->password = Hash::make($request->new_password);
    $loggedInAdmin->save();

    return redirect()->route('login')->with('Info', 'Password changed successfully.');
}

public function webchangePassword(Request $request)
{
  
    
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required',
        'confirm_password' => 'required',
    ]);
    $loggedInUser = Auth::user();

    if (!Hash::check($request->old_password, $loggedInUser->password)) {
        return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
    }

    $loggedInUser->password = Hash::make($request->new_password);
    $loggedInUser->save();

    return redirect()->route('web.login')->with('success', 'Password changed successfully.');
}


public function edit_register_page($id)
{

 $registeruser = User::find($id);
 if(is_null($registeruser)){
    return redirect('admin.register');
 }else{
    $data = compact('registeruser');
     $data['customer'] = view('admin.folder.edit-register' , compact('registeruser'));
     return view('admin.home',$data);   

    
 }
}


public function update_register_page(Request $request,$id='')
{
    $validatedData = $request->validate([
        'username' => 'required',
    ]);

$user = new User();
$data = array();
$data['username'] = $request['username'];

$user->UpdateRecord($id,$data); 
return redirect('admin/profile')->with('Info','Enter your data Updata Successfully');


}

public function web_edit_register_page($id)
{

 $registeruser = User::find($id);
 if(is_null($registeruser)){
    return redirect('web.login');
 }else{
    $data = compact('registeruser');
     $data['customerweb'] = view('web.file.edit-register' , compact('registeruser'));
     return view('web.home',$data);   

    
 }
}

public function web_update_register_page(Request $request,$id='')
{
    $validatedData = $request->validate([
        'username' => 'required',
    ]);

$user = new User();
$data = array();
$data['username'] = $request['username'];

$user->UpdateRecord($id,$data); 
return redirect('admin/my-profile')->with('message','Enter your data Updata Successfully');


}



//     public function customer_login_store(Request $request)
//     {
     
//         $validatedData = $request->validate([
//             'email' => 'required|email',
//             'password' => 'required|string|min:6', 
//         ],[
//             'email.required' => 'please enter your email adddress',
//             'email.email' =>  'please enter your another email',
//             'password.required' => 'please enter your password',
//         ]);
       
//       $login = User::where('email', $validatedData['email'])->first();
//       if($login && Hash::check($validatedData['password'],$login->password) && $login->role == 'customer'){
//         Auth::Login($login);
//         return redirect()->intended('/')->with('success', 'welcome back'.$login->username."!");
//   }else{
//     return redirect('web-login')->with('error', 'Invalid Credential')->withInput($request->only('email'));
//   }
//     }


    public function logout()
    {
    
        Auth::guard('web')->logout();
        return redirect('login')->with('error', 'Logout successful.');
    }

    
    
}
