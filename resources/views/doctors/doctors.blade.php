@extends('layouts.app')


@section('content')

        <div class="content">
            <div class="title m-b-md">
                الاطباء
            </div>


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">title</th>
                        <th scope="col">Operation</th>

                    </tr>
                    </thead>

                    <thead>
                    @if(isset($doctors) && $doctors -> count() > 0)
                        @foreach($doctors as $doctor)
                    <tr>
                        <th scope="col">{{$doctor -> id}}</th>
                        <th scope="col">{{$doctor -> name}}</th>
                        <th scope="col">{{$doctor -> title}}</th>
                        <th>
                            <a  href="{{route('doctors.services',$doctor -> id)}}" class="btn btn-success">الاختصاص</a>
                        </th>
                    </tr>
                        @endforeach
                    @endif
                    </thead>
                </table>
          </div>
    </div>

@stop
