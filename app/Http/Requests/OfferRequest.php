<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $rules =  [
            'name_ar'=>'required|max:100|unique:offers,name_ar',
            'email' => 'required|max:100',
            'password' => 'required|min:6',
            'name_en'=>'required|max:100|unique:offers,name_en',
            'price'  =>'required|numeric',
            'photo'=> 'required',
            'details_ar'=> 'required',
            'details_en'=> 'required',
        ];
    }

    public function messages()
    {
        return $message = [
            'name_ar.required' => __('messages.offer name required'),
            'name_en.required' => __('messages.offer name required'),
            'price.required' => __('messages.offer price must be required'),
            'price.unique'  => __('messages.offer price must be unique'),
            'name_ar.unique'  => __('messages.offer name must be unique'),            'name.unique'  => __('messages.offer name must be unique'),
            'name_en.unique'  => __('messages.offer name must be unique'),
            'price.numeric' =>__('messages.offer price must be numeric'),
            'details_en.required' => __('messages.offer details must be required'),
            'details_ar.required' => __('messages.offer details must be required'),

        ];
    }
}
