<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends  Authenticatable
{
    protected $table = "admins";
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
