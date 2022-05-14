<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $table = "medicals";
    protected $fillable=[
        'patient_id','pdf'
    ];

    public $timestamps = true;

//    public function hospital(){
//        return $this -> belongsTo('App\Models\Hospital','hospital_id','id');
//    }
    public function doctors(){
        return $this -> belongsToMany('App\Models\Doctor','doctor_service','service_id','doctor_id','id','id');
    }
}
