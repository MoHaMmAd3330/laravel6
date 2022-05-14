<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = "patients";
    protected $fillable=[
        'name','age'
    ];

    public $timestamps = true;

//    public function hospital(){
//        return $this -> belongsTo('App\Models\Hospital','hospital_id','id');
//    }
    public function doctor(){
        return $this -> hasOneThrough('App\Models\Doctor','App\Models\Medical','patient_id','medical_id','id');
    }
}
