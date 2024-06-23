<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blog";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'by_text',  
        'by_date',
        'title',
        'descripition',
        'status',
    ];
    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('blog')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
