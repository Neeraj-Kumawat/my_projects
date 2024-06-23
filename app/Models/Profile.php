<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "register";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'username',  
        'email',
        'password',
    ];
}
