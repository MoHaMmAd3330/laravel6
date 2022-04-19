@extends('layouts.app')


@section('content')
<div class="flex-center position-ref full-height">

    <div class="container text-center">
        <div class="alert alert-success" id="success_msg" style="display: none;">
            تم الحفظ بنجاح
        </div>
    @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form class="row g-3" method="POST"  id="offerForm" action="" enctype="multipart/form-data">
            @csrf {{--<input name="_token" value="{{csrf_token()}}--}}
            <div class="col-12">
                <label for="inputaddress" class="form-label">{{__('messages.enter photo')}}</label>
                <input type="file" class="form-control"  name="photo"  placeholder="{{__('messages.enter photo')}}">

                <small class="form-text text-danger"></small>


            </div>

            <div class="offerRow col-12">
                <label for="inputaddress" class="form-label">{{__('messages.offer name ar')}}</label>
                <input type="text" class="form-control"  name="name_ar" placeholder="{{__('messages.enter email')}}">

                <small id="name_ar_error" class="form-text text-danger"></small>


            </div>
            <div class="col-12">
                <label for="inputaddress" class="form-label">{{__('messages.offer name en')}}</label>
                <input type="text" class="form-control"  name="name_en" placeholder="{{__('messages.enter email')}}">

                <small id="name_en_error" class="form-text text-danger"></small>


            </div>
            <div class="col-12">
                <label for="inputaddress2" class="form-label">{{__('messages.offer price')}} </label>
                <input type="text" class="form-control" name="price" placeholder="{{__('messages.enter price')}}">

                <small id="price_error" class="form-text text-danger"></small>


            </div>

            <div class="col-md-12">
                <label for="inputcity" class="form-label">{{__('messages.offer details ar')}}</label>
                <input type="text" class="form-control" name="details_ar" placeholder="{{__('messages.enter details')}}">

                <small id="details_ar_error" class="form-text text-danger"></small>

            </div>
            <div class="col-md-12">
                <label for="inputcity" class="form-label">{{__('messages.offer details en')}}</label>
                <input type="text" class="form-control" name="details_en" placeholder="{{__('messages.enter details')}}">

                <small id="details_en_error" class="form-text text-danger"></small>

            </div>

            <div class="col-12">
                <button id="save_offer" class="btn btn-primary">{{__('messages.offer save')}}</button>
            </div>
        </form>
    </div>
</div>
@stop
@section('scripts')
    <script>
    $(document).on('click','#save_offer',function(e) {
        e.preventDefault();
        $('#photo_error').text('');
        $('#name_ar_error').text('{{__('messages.offer name required')}}');
        $('#name_en_error').text('{{__('messages.offer name required')}}');
        $('#price_error').text('{{__('messages.offer price must be required')}}');
        $('#details_ar_error').text('{{__('messages.offer details must be required')}}');
        $('#details_en_error').text('');
        var formData = new FormData($('#offerForm')[0]);

        $.ajax({
            type:'post',
            enctype: 'multipart/form-data',
            url:"{{Route('ajax.offers.store')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
        success:function (data)
        {


                if(data.status == true) {
                    $('#success_msg').show();

                }
            $('.offerRow'+data).remove();

            }, error:function (reject){

            }



        });
    });



</script>

@stop
