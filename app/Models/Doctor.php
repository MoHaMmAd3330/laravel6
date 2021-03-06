<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctors";
    protected $fillable=[
        'name','title','hospital_id','created_at','updated_at','medical_id'
    ];
    protected $hidden=[
        'created_at','updated_at','hospital_id','pivot'
    ];
    public $timestamps = true;

    public function hospital(){
        return $this -> belongsTo('App\Models\Hospital','hospital_id','id');
    }

    public function services(){
        return $this-> belongsToMany('App\Models\Service','doctor_service','doctor_id','service_id','id','id');

    }
}
