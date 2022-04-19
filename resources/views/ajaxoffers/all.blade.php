@extends('layouts.app')
@section('content')

<style>
    .create{
        width: auto;
        margin-bottom: auto;
    }
</style>
    <nav class="navbar navbar-expand navbar-light ">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item active">
                        <a class="nav-link text-center"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
                            <span class="sr-only"></span></a>

                        @endforeach

                    </li>
                    <a class="create btn btn-success text-center " href="{{ url('offers/create') }}">
                        {{__('messages.offer create')}}</a>
            </ul>


        </div>
    </nav>
<div class="alert alert-success" id="success_msg" style="display: none;">
    تم الحذف بنجاح
</div>

    {{--@if(Session::has('success'))--}}

    {{--    <div class="alert alert-success">--}}
    {{--        {{Session::get('success')}}--}}
    {{--    </div>--}}
    {{--@endif--}}


    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('messages.offer name all')}}</th>
            {{--        <th scope="col">{{__('messages.offer name en')}}</th>--}}
            <th scope="col">{{__('messages.offer price')}}</th>
            {{--        <th scope="col">{{__('messages.offer details ar')}}</th>--}}
            <th scope="col">{{__('messages.offer details all')}}</th>
            <th scope="col">{{__('messages.offer photo')}}</th>
            <th scope="col">{{__('messages.created at')}}</th>
            <th scope="col">{{__('messages.updated at')}}</th>
            <th class="content" scope="col">{{__('messages.operation')}}</th>


        </tr>
        </thead>
        <tbody>


        @foreach($offers as $offer)
            <tr>
                <th scope="row">{{$offer -> id}}</th>
                <td>{{$offer -> name}}</td>
                <td>{{$offer -> price}}</td>
                <td>{{$offer -> details}}</td>
                <td><img  style="width: 90px; height: 90px;" src="{{asset('images/offer/'.$offer->photo)}}"></td>
                <td>{{$offer -> created_at}}</td>
                <td>{{$offer -> updated_at}}</td>

                <td class="content">
                    <a href="{{url('offers/edit/' .$offer->id)}}" class="btn btn-success">{{__('messages.update')}}</a>
                    <a href="{{url('offers/delete/' .$offer->id)}}" class="btn btn-danger">{{__('messages.delete')}}</a>
                    <a href="" offer_id="{{$offer -> id}}" class="delete_btn btn btn-danger">{{__('messages.delete ajax')}}</a>
                    <a href="{{route('ajax.offers.edit',$offer->id)}}"  class=" btn btn-danger">Update ajax</a>


                </td>




                <td>
                    {{--                <a href="{{url('offers/edit/'.$offer -> id)}}" class="btn btn-success"> {{__('messages.update')}}</a>--}}
                    {{--                <a href="{{route('offers.delete',$offer -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>--}}
                </td>

            </tr>
        @endforeach

        </tbody>



        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
    @endif




@stop
@section('scripts')
            <script>


                $(document).on('click','.delete_btn',function(e) {
                    e.preventDefault();
                 var offer_id = $(this).attr('offer_id');
                    $.ajax({
                        type:'post',
                        // enctype: 'multipart/form-data',
                        url:"{{route('ajax.offers.delete')}}",
                        data:{
                            '_token':"{{csrf_token()}}",
                            'id':offer_id
                        },

                        success:function (data)
                        {


                            if(data.status == true) {
                                $('#success_msg').show();

                            }
                            $('.offerRow'+data.id).remove();
                        }, error:function (reject){

                        }



                    });
                });
            </script>
@stop
