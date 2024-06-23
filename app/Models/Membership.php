<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Membership extends Model
{
    use HasFactory;

    protected $table = "membership";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'title',  
        'descripition',
        'year',
        'product',
    ];
    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('membership')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
