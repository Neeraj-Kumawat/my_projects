<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class feature extends Model
{
    use HasFactory;

    protected $table = "feature";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'title',  
        'descripition',
        'image',
        'status',
    ];
    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('feature')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
