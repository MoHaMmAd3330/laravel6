@extends('layouts.app')


@section('content')

        <div class="content">
            <div class="title m-b-md">
                الخدمات
            </div>


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                    </tr>
                    </thead>

                    <thead>
                    @if(isset($services) && $services -> count() > 0)
                        @foreach($services as $service)
                    <tr>
                        <th scope="col">{{$service -> id}}</th>
                        <th scope="col">{{$service -> name}}</th>
                        <th scope="col">{{$service -> title}}</th>

                        {{--                        <th>--}}
{{--                            <a  href="{{route('doctors.services',$doctor -> id)}}" class="btn btn-success">الاختصاص</a>--}}
{{--                        </th>--}}
                    </tr>
                        @endforeach
                    @endif
                    </thead>
                </table>
            <br>
            <form class="row g-3" method="post" action="{{route('save.Services')}}">
                @csrf {{--<input name="_token" value="{{csrf_token()}}--}}
                <div class="col-12">
                    <label for="inputaddress" class="form-label">اختر طبيب</label>
                 <select class="form-control" name="doctor_id">
{{--                     @if(isset($doctors) && $doctors -> count() > 0)--}}
                     @foreach($doctors as $doctor)
                         <option value="{{$doctor -> id}}">
                             {{$doctor -> name}}
                         </option>
                     @endforeach
                 </select>

                </div>
                <div class="col-12">
                    <label for="inputaddress" class="form-label">اختر الخدمات</label>
                    <select class="form-control" name="services_id[]" multiple>
{{--                        @if(isset($allServices) && $allServices -> count() > 0)--}}
                        @foreach($allServices as $allService)
                        <option value="{{$allService -> id}}">
                            {{$allService -> name}}
                        </option>
                        @endforeach
                    </select>

                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{__('messages.offer save')}}</button>
                </div>
            </form>

        </div>
    </div>

@stop
