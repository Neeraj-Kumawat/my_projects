<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class WorkingHours extends Model
{
    use HasFactory;

    protected $table = "working_hours";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'title',  
        'status',
    ];
    public function UpdateRecord($id='',$data=''){

        $UpdateRecord = DB::table('working_hours')->where('id',$id)->update($data);
        return $UpdateRecord;

    }

    public function GetAllRecord(){

        $UpdateRecord = DB::table('working_hours')->get();
        return $UpdateRecord;

    }
}
