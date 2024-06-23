<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class team extends Model
{
    use HasFactory;

    protected $table = "team";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [							
        'name',  
        'short_descripition',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'img',
        'status',
    ];

    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('team')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
