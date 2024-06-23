<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
    use HasFactory;

    protected $table = "gallery";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'title',  
        'img',

    ];
    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('gallery')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
