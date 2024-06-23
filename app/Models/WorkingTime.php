<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WorkingTime extends Model
{
    use HasFactory;
    protected $table = "working_time";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'title',  
        'status',
    ];
    public function UpdateRecord($id='',$data=''){

        $UpdateRecord = DB::table('working_time')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
    public function GetAllRecord2(){

        $UpdateRecord = DB::table('working_time')->get();
        return $UpdateRecord;

    }
    public function GetProductbyProduct($id=''){

        $Record = DB::table('working_time')->where('categoery_id',$id)->get();
        return $Record;

    }
}
