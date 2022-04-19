<?php

namespace App\Http\Controllers;

use App\Events\VideoViewer;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Models\video;
use App\Traits\offerTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;

class CrudController extends Controller
{
    use offerTraits;


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

public function store(Request $request)
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


//    $file_name = $this -> saveImage($request ->photo,'images/offer');



    Offer::create([
//        'photo'  => $file_name,
        'name_ar'=> $request->name_ar,
        'name_en'=> $request->name_en,
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
            'photo',
//            'details'
            'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
//            'price',
            'details_' . LaravelLocalization::getCurrentLocale() . ' as details',
            'created_at',
            'updated_at'
        )->get();
        return view('offers.all',compact('offers'));
    }
    public function EditOffer($offer_id)
    {
        // Offer::findOrFail($offer_id);
        $offer = Offer::find($offer_id);  // search in given table id only
        if (!$offer)
            return redirect()->back();

        $offer = Offer::select('id','name_ar','name_en','photo','details_ar','details_en','price')->find($offer_id);

        return view('offers.edit', compact('offer'));

    }
    public function delete($offer_id){
       $offer = Offer::find($offer_id);
        if (!$offer)
            return redirect()->back()->with(['error'=>__('messages.offer not exist')]);
        $offer -> delete();
        return redirect()->route('offers.all')->with(['success'=>__('messages.offer delete')]);
    }
public function updateOffer(OfferRequest $request , $offer_id){
    //update date
    $offer = Offer::find($offer_id);
    if (!$offer)
        return redirect()->back();

    $offer ->update($request -> all());
    return redirect()->back()->with(['success'=>'تم التحديث بنجاح']);

}

public  function getVideo(){

       $video =  video::first();
       event(new VideoViewer($video));
return view('offers.Video')->with('video',$video);
}

}
