<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{

    public  function __construct()
    {
        //
    }

    public function getOffers(){
        return Offer::selcet('id','name')->get();
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

public function store(Request $request)
{
  $rules =  [
        'name'   =>'required|max:100|unique:offers,name',
        'price'  =>'required|numeric',
        'details'=> 'required',
    ];

    $message = $this -> getmessage();
    $validator = Validator::make($request -> all(),$rules,$message);

    if($validator -> fails()){
        return redirect()->back()->withErrors($validator)->withInput($request -> all());
//        return json_encode($validator ->errors(), JSON_UNESCAPED_UNICODE);

    }
    Offer::create([
            'name'   => $request->name,
            'price'  => $request->price,
            'details'=> $request->details,
        ]);
    return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح ']);
}
protected function getmessage(){
        return $message = [
            'name.required' => __('messages.offer name required'),
            'price.required' => __('messages.offer price must be required'),
            'price.unique'  => __('messages.offer price must be unique'),
            'name.unique'  => __('messages.offer name must be unique'),
            'price.numeric' =>__('messages.offer price must be numeric'),
            'details.required' => __('messages.offer details must be required'),
        ];
}

}
