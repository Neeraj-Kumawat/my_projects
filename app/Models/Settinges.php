<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Settinges extends Model
{
    use HasFactory;
    
    protected $table = "settings";
    protected $primaryKey = "id";
    public $timestamps = true;

   

    protected $fillable = ['fieldkey', 'fieldvalue'];


    public function UpdateRecord($id='',$data=[]){

        $UpdateRecord = DB::table('settings')->where('id',$id)->update($data);
        return $UpdateRecord;

    }
}
