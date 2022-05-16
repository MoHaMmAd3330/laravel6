@extends('layouts.app')


@section('content')
{{--<div class="flex-center position-ref full-height">--}}

{{--
{{--    </div>--}}
{{--</div>--}}
<div class="content">
            <div class="title">
                المستشفيات
            </div>
        <table class=" table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">address</th>
                <th scope="col">الاجراءات</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($countries) && $countries -> count() > 0)
                @foreach($countries as $countrie)
            <tr>
                <th scope="row">{{$countrie -> id}}</th>
                <td>{{$countrie -> name}}</td>
                <td>{!! $countrie -> address !!}</td>
                <td>
                    <a  href="{{route('hospital.doctors',$countrie -> id)}}" class="btn btn-success">الاطباء</a>
                    <a  href="{{route('hospital.delete',$countrie -> id)}}" class="btn btn-danger">حذف</a>
                </td>
            </tr>
                @endforeach
            @endif

            </tbody>
        </table>


@stop
