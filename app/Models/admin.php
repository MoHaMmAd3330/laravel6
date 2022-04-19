<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class admin extends Model
{
    protected $table = "admins";
    protected $fillable=['name','email','password',];
//    protected $hidden=['created_at','updated_at'];
//    public $timestamps = false;
////
////// turn off only updated_at
//    const UPDATED_AT = false;
}
