<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            h1 {
                margin-top: 7%;
            }
            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <li class="nav-item">
                        <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">  {{ $properties['native'] }}</a>
                    </li>
                    @endforeach
                    <a class="nav-link text-center " href="{{ url('offers/all') }}">
                        {{__('messages.offer all')}}</a>
                </ul>
            </div>
        </div>
    </nav>
{{--    ///////--}}

    <div class="content">
        <h1>{{__('messages.offer h1')}}</h1>
    </div>


    <div class="flex-center position-ref full-height">

        <div class="container text-center">
            @if(Session::has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form class="row g-3" method="post" action="{{route('offers.store')}}" enctype="multipart/form-data">
                    @csrf {{--<input name="_token" value="{{csrf_token()}}--}}
                <div class="col-12">
                    <label for="inputaddress" class="form-label">{{__('messages.enter photo')}}</label>
                    <input type="file" class="form-control"  name="photo"  placeholder="{{__('messages.enter photo')}}">
                    @error('photo')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror

                </div>

                    <div class="col-12">
                        <label for="inputaddress" class="form-label">{{__('messages.offer name ar')}}</label>
                        <input type="text" class="form-control"  name="name_ar" placeholder="{{__('messages.enter email')}}">
                        @error('name_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror

                    </div>
                <div class="col-12">
                    <label for="inputaddress" class="form-label">{{__('messages.offer name en')}}</label>
                    <input type="text" class="form-control"  name="name_en" placeholder="{{__('messages.enter email')}}">
                    @error('name_en')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror

                </div>
                    <div class="col-12">
                        <label for="inputaddress2" class="form-label">{{__('messages.offer price')}} </label>
                        <input type="text" class="form-control" name="price" placeholder="{{__('messages.enter price')}}">
                        @error('price')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror

                    </div>

                <div class="col-md-12">
                    <label for="inputcity" class="form-label">{{__('messages.offer details ar')}}</label>
                    <input type="text" class="form-control" name="details_ar" placeholder="{{__('messages.enter details')}}">
                    @error('details_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                    <div class="col-md-12">
                            <label for="inputcity" class="form-label">{{__('messages.offer details en')}}</label>
                            <input type="text" class="form-control" name="details_en" placeholder="{{__('messages.enter details')}}">
                            @error('details_en')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">{{__('messages.offer save')}}</button>
                    </div>
                </form>
        </div>
        </div>

    </body>
</html>
