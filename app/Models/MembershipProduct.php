<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MembershipProduct extends Model
{
    use HasFactory;

    
    protected $table = "membership_product";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'title',  
        'status',

    ];
    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('membership_product')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
