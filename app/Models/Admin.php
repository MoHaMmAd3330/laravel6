<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends model
{
    protected $table = "admin";
    protected $fillable = [
        'name', 'email', 'password',
    ];
//    protected $hidden=['created_at','updated_at'];
//    public $timestamps = false;
////
////// turn off only updated_at
//    const UPDATED_AT = false;

//protected $hidden = [
//    'password',
//];

protected $guard = "admin";
}
