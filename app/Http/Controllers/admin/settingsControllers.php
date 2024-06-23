<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settinges;
use App\Models\contact;


class settingsControllers extends Controller
{

    public function settings(Request $request)
{

    
    $data = array();

    $site_title = Settinges::where('fieldkey', 'site_title')->first();
    $favicon = Settinges::where('fieldkey', 'favicon')->first();
        $logo = Settinges::where('fieldkey', 'logo')->first();
        $footer_logo = Settinges::where('fieldkey', 'footer_logo')->first();
       
        $saturday = Settinges::where('fieldkey', 'saturday')->first();
        $email_address = Settinges::where('fieldkey', 'email_address')->first();
        $phone = Settinges::where('fieldkey', 'phone')->first();
        $conact_address = Settinges::where('fieldkey', 'conact_address')->first();
        $google_map = Settinges::where('fieldkey', 'google_map')->first();
        $monday = Settinges::where('fieldkey', 'monday')->first();
        $tuesday = Settinges::where('fieldkey', 'tuesday')->first();
        $wednesday = Settinges::where('fieldkey', 'wednesday')->first();
        $thursday = Settinges::where('fieldkey', 'thursday')->first();
        $friday = Settinges::where('fieldkey', 'friday')->first();

        $footer_about = Settinges::where('fieldkey', 'footer_about')->first();
        $footer_descripition = Settinges::where('fieldkey', 'footer_descripition')->first();
        $footer_copy_right_text = Settinges::where('fieldkey', 'footer_copy_right_text')->first();
        $facebook = Settinges::where('fieldkey', 'facebook')->first();
        $twitter = Settinges::where('fieldkey', 'twitter')->first();
        $instagram = Settinges::where('fieldkey', 'instagram')->first();
        $linkedin = Settinges::where('fieldkey', 'linkedin')->first();
      
        $data['site_title'] = $site_title;
        $data['favicon'] = $favicon;
        $data['logo'] = $logo;
        $data['email_address'] = $email_address;
        $data['phone'] = $phone;
        $data['conact_address'] = $conact_address;
        $data['google_map'] = $google_map;
        $data['monday'] = $monday;
        $data['tuesday'] = $tuesday;
        $data['wednesday'] = $wednesday;
        $data['thursday'] = $thursday;
        $data['friday'] = $friday;
        $data['saturday'] = $saturday;
        $data['footer_about'] = $footer_about;
        $data['footer_descripition'] = $footer_descripition;
        $data['footer_copy_right_text'] = $footer_copy_right_text;
        $data['footer_logo'] = $footer_logo;
        $data['facebook'] = $facebook;
        $data['twitter'] = $twitter;
        $data['instagram'] = $instagram;
        $data['linkedin'] = $linkedin;
        $data['customer'] = view('admin.folder.settings', $data);
        return view('admin.home', $data);   
    }

    public function updateSettings(Request $request, $id = '')
    {
      
        $updatedSettings = $request->only([ 
            'site_title',
            'email_address',
            'phone',
            'conact_address',
            'google_map',
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday',
            'saturday',
            'footer_about',
            'footer_descripition',
            'footer_copy_right_text',
            'facebook',
            'twitter',
            'instagram',
            'linkedin',
            
        ]);


        $favicon = Settinges::where('fieldkey', 'favicon')->first();
  
                if ($request->hasFile('favicon')) {
                    $image = $request->file('favicon');
                    $uploaded_logo = time().'.'.$image->getClientOriginalExtension();
                
                    $image->move(public_path('settinges'), $uploaded_logo);
                    if ($favicon) { 
                        $favicon->update([
                            'fieldvalue' => $uploaded_logo,
                        ]);
                    }
                }

                $logo = Settinges::where('fieldkey', 'logo')->first();
  
                if ($request->hasFile('logo')) {
                    $image = $request->file('logo');
                    $uploaded_logo = time().'.'.$image->getClientOriginalExtension();
                
                    $image->move(public_path('settinges'), $uploaded_logo);
                    if ($logo) { 
                        $logo->update([
                            'fieldvalue' => $uploaded_logo,
                        ]);
                    }
                }

                $footer_logo = Settinges::where('fieldkey', 'footer_logo')->first();
  
                if ($request->hasFile('footer_logo')) {
                    $image = $request->file('footer_logo');
                    $uploaded_logo = time().'.'.$image->getClientOriginalExtension();
                
                    $image->move(public_path('settinges'), $uploaded_logo);
                   // echo $uploaded_logo; die;
                    // Assuming $footer_logo is the model instance representing the footer logo
                    if ($footer_logo) { 
                        $footer_logo->update([
                            'fieldvalue' => $uploaded_logo,
                        ]);
                    }
                }

              
        foreach ($updatedSettings as $fieldKey => $fieldValue) {
            
            $setting = Settinges::where('fieldkey', $fieldKey)->first();
    
            if ($setting) {
              //  echo '<pre>'; print_r($fieldValue); die;
                $trimmedValue = substr($fieldValue, 0, 255); 
                $setting->fieldvalue = $fieldValue;
                $setting->save();
            }
        }
        return redirect()->back()->with('success', 'Settings Updated Successfully');
    }
}
