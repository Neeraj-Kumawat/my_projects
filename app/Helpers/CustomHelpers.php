<?php
use App\Models\Settinges;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


if (!function_exists('settingsContentByKey')) {
    function settingsContentByKey($fieldkey='')
    {

        $setting = Settinges::where('fieldkey', $fieldkey)->first();

        return $setting ? $setting->fieldvalue : null;
    }
}

if (!function_exists('getImageUrls')) {
    function getImageUrls()
    {
        return Gallery::pluck('img')->toArray();
    }
}


if (!function_exists('userNameUrls')) {
    function userNameUrls()
    {
        $loggedInAdmin = Auth::user();

        return [
            'username' => $loggedInAdmin->username, 
        ];
    }
}


?>