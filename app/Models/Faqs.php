<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Faqs extends Model
{
    use HasFactory;

    protected $table = "faqs";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'title',  
        'content',
        'status',
    ];
    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('faqs')->where('id',$id)->update($data);
        return $UpdateRecord;

    }

}
