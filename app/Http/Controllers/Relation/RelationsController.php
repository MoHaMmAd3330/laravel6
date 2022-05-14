<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Phone;
use App\Models\Service;
use App\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
           public function hasOneRelations(){
               //\App\User::where('id',15)->first();
                $user = \App\User::with(['Phone'=> function($q){
                    $q ->select('code','phone','user_id');
               }])->find(45);
        //       return $user ->Phone->code;
        //       $phone = \App\Models\Phone::find(43);
        //       return $user -> Phone;
               return response()->json($user);
           }

           public function hasOneRelationsReserve(){
             $phone = Phone::find(1);
             $phone -> makeVisible(['user_id']);
             //$phone -> makeHidden(['code']);
               $phone -> makeVisible(['user_id']);

               return $phone;
           }


           public function getUserHasPhone(){
              return User::whereHas('Phone')->get();
           }
           public function getUserNotHasPhone(){
               return User::whereDoesntHave('Phone')->get();
           }

           public function getHospitalDoctors(){
               $hospital = Hospital::find(1);
        //      return $hospital -> doctors;
                $hospital = Hospital::with('doctors')->find(1);
             $doctor = $hospital -> doctors;
                foreach ($doctor as $doctors){
                   echo $doctors -> name."<br>";
        }
               $doctor = Doctor::find(3);
              return $doctor -> hospital;
           }
        public function hospitals(){
            $hospitals =  Hospital::select('id','name','address')->get();

               return view('doctors.hospitals',compact('hospitals'));
        }
                public function doctors($hospital_id){
                     $Hospital =  Hospital::find($hospital_id);
                     $doctors = $Hospital -> doctors ;
                return view('doctors.doctors',compact('doctors'));
                }

        public function delete($hospital_id){

            $hospital = Hospital::find($hospital_id);
            if (!$hospital)
                return abort('404');
            $hospital -> doctors() -> delete();
            $hospital -> delete();
            return redirect()->route('hospitals.all');

        }
        public function getDoctorServicers(){
               return Doctor::with('services')->find(1);
//         return  $doctor -> services;
        }
        public function getServicersDoctor(){
              return $doctor = Service::with(['doctors'=>function($q){
                  $q ->select('doctors.id','title','name');
              }])->find(1);

        }

        public function getdoctorsServicersbyeid($doctorId){
               $doctor = Doctor::find($doctorId);
                $services = $doctor -> services;

                $doctors = Doctor::select('id','name')->get();
                $allServices = Service::select('id','name')->get();

            return view('doctors.services',compact('services','doctors','allServices'));
        }
        public function saveServicesTodoctor(Request $request){
           $doctor = Doctor::find($request -> doctor_id);
           if(!$doctor)
               return abort('404');
//           $doctor -> services() -> attach($request -> services_id);
//            $doctor -> services() -> sync($request -> services_id); تضيف خيار وتمسح القديم وتمنع التكرار
              $doctor -> services() -> syncWithoutDetaching($request -> services_id);

            return redirect()->back();

        }

        public function getpatientDoctor(){
        $patient = Patient::find(1);
         return   $patient -> doctor;
        }
}
