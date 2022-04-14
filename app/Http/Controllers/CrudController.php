<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
class CrudController extends Controller
{

    public  function __construct()
    {
        //
    }

    public function getOffers(){
        return Offer::select('id','name')->get();
    }

//    public function store(){
//        Offer::create([
//            'name'   => '',
//            'price'  => '',
//            'details'=> ' ',
//
//        ]);
//    }

    public function create(){
            return view('offers.create');
}

public function store(OfferRequest $request)
{
//
//    $rules = $this -> getrules();
//    $message = $this -> getmessage();
//    $validator = Validator::make($request -> all(),$rules,$message);
//
//    if($validator -> fails()){
//        return redirect()->back()->withErrors($validator)->withInput($request -> all());
////        return json_encode($validator ->errors(), JSON_UNESCAPED_UNICODE);
//
//    }
    Offer::create([
            'name_ar'   => $request->name_ar,
            'name_en'   => $request->name_en,
            'price'  => $request->price,
            'details_en'=> $request->details_en,
            'details_ar'=> $request->details_ar,

    ]);
    return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح ']);
}
    public function getAllOffers(){
        $offers =  Offer::select(
            'id',
//            'name',
            'price',
//            'details'
            'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
//            'price',
            'details_' . LaravelLocalization::getCurrentLocale() . ' as details',
            'created_at',
            'updated_at'
        )->get();
        return view('offers.all',compact('offers'));
    }
}
