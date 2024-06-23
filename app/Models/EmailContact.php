<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmailContact extends Model
{
    use HasFactory;

    
    protected $table = "emailtable";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'email',  
      
    ];

}
