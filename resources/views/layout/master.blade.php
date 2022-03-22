
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap</title>
  <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{URL::asset('bootstrap/Css/all.min.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hind&family=Raleway:ital,wght@0,300;0,500;1,400&family=Work+Sans:wght@200;300;400;500;800&display=swap" >
<link rel="stylesheet" href="{{URL::asset('bootstrap/Css/Css.css')}}">
</head>
<body>
  <!-- Start section Tool Box  -->
@include('include.header')

@include('include.footer')
<!-- Start section loding  -->
<!-- <section class="loading-overlay">
  <H1>The Website Is Loading Now</H1>
</section> -->

<!-- Start section loding  -->
{{-- <section  class="loading-overlay">
  <div class="sk-folding-cube">
    <div class="sk-cube1 sk-cube"></div>
    <div class="sk-cube2 sk-cube"></div>
    <div class="sk-cube4 sk-cube"></div>
    <div class="sk-cube3 sk-cube"></div>
  </div>
</section> --}}
<!-- End section loding  -->
<!-- Start Scroll TO Top  -->
<div id="scroll-up">
  <i class="fa fa-chevron-up fa-3x "></i>
</div>
<div class="scroll-down">
  <i class="fa fa-chevron-down fa-3x "></i>
</div>


<!-- End Scroll To Top -->
<!-- Start scroll -->



  <script src="{{URL::asset('bootstrap/js/jq.js')}}"></script>
  <script src="{{URL::asset('bootstrap/js/jq1.js')}}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="{{URL::asset('bootstrap/js/jquery.nicescroll.min.js')}}"></script>
</body>
</html>





