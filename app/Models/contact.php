<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class contact extends Model
{
    use HasFactory;

    
    protected $table = "contact";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'name',  
        'email',
        'phone',
        'message',
        'status',
    ];
    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('contact')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
