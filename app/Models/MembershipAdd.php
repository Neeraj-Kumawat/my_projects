<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MembershipAdd extends Model
{
    use HasFactory;

    protected $table = "membership_purchase";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'user_id',  
        'username',  
        'product',
        'current_date',
        'date_30_days_from_now',

    ];


    public function CheckMembershiPpurchase($id){
        $GetRecord = DB::table('membership_purchase')->where('user_id',$id)->get();
        return $GetRecord;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
