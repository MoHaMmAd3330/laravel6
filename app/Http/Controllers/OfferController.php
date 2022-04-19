<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Traits\offerTraits;
use Illuminate\Http\Request;
use LaravelLocalization;
class OfferController extends Controller
{
    use offerTraits;

    public function  create(){

        return view('ajaxoffers.create');
    }




    public function store(offerRequest $request)
    {
        //save offer into DB using AJAX

        $file_name = $this->saveImage($request->photo, 'images/offers');
        //insert  table offers in database
      $offer = Offer::create([
            'photo' => $file_name,
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'price' => $request->price,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,

        ]);
      if($offer)
          return response()->json([
             'status'=> true,
             'msg'=>'messages.offer save',
          ]);
    else
        return response()->json([
            'status'=> false,
            'msg'=>'لم يتم الحفط',
//            'id'=>$request -> id
        ]);
    }
    public function all(){
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
        )->limit(10)->get();
        return view('ajaxoffers.all',compact('offers'));
    }
public function delete(Request $request){

    $offer = Offer::find($request -> id);
    if (!$offer)
        return redirect()->back()->with(['error'=>__('messages.offer not exist')]);
    $offer -> delete();
//    return redirect()->route('offers.all')->with(['success'=>__('messages.offer delete')]);
    return response()->json([
        'status'=> true,
        'msg'=>'messages.offer save',
        'id'=>$request -> id
    ]);
}


    public function edit(Request $request)
    {
        // Offer::findOrFail($offer_id);
        $offer = Offer::find($request -> offer_id);  // search in given table id only
        if (!$offer)
            return response()->json([
                'status'=> false,
                'msg'=>'لم يتم الحفط',
//            'id'=>$request -> id
            ]);

        $offer = Offer::select('id','name_ar','name_en','photo','details_ar','details_en','price')->find($request -> offer_id);

        return view('ajaxoffers.edit', compact('offer'));

    }
    public function update(Request $request){

        //update date
        $offer = Offer::find($request-> offer_id);
        if (!$offer)
            return response()->json([
                'status'=> false,
                'msg'=>'لم يتم الحفط',
//
            ]);
//        $file_name = $this->saveImage($request->photo, 'images/offers');

        $offer ->update($request -> all());
        return response()->json([
            'status'=> true,
            'msg'=>' تم الحديث بنجاح',
//
        ]);

    }
}
