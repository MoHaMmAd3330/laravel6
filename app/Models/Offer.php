<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    protected $table = "offers";
    protected $fillable=['name_ar','photo','name_en','price','details_en','details_ar','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
//    public $timestamps = false;
////
////// turn off only updated_at
//    const UPDATED_AT = false;
}
