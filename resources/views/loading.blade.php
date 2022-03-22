
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
   <!-- start navbar -->
 <nav class="navbar  navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">MoHmMad<span> Net.</span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="#"><i class="fas fa-home fa-1x"></i> Home<span class="sr-only">(current)</span></a></li>
          <li><a href="">About</a></li>
          <li><a href="#">Company</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated </a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i> Map</a></li>
              <li><a href="#">Contect</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- end navbar -->

  <!-- End section Tool Box  -->


  <!-- start carousel -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="bootstrap/—Pngtree—blue carbon background with sport_1200848.jpg" alt="one">
        <div class="carousel-caption hidden-md hidden-xs">
          <h1>Web Hosting</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.</p>
        </div>
      </div>
      <div class="item">
        <img src="bootstrap/—Pngtree—tech blue gradient background_329197.jpg" alt="twe">
        <div class="carousel-caption hidden-md hidden-xs">
          <h1>Desktop</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.</p>
        </div>
      </div>
      <div class="item">
        <img src="bootstrap/—Pngtree—tech blue gradient background_329197.jpg" alt="three">
        <div class="carousel-caption hidden-md hidden-xs">
          <h1>Programming</h1>
          <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.</p>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

    </a>
    <a class="right  carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

    </a>
  </div>
</div>

  <!-- End carousel -->
  <!-- start section About -->
 <section class="about text-center">
    <div class="container">
   <h1>Meet Our New Template <span class="m"> MoHmMad</span><span class="net"> Net.</span></h1>
   <p class="lead">Hello Let Me intrduce Our New Template MoHmMad Net. Created With All The Love With lo <strong>Bootstrap 3.2.0</strong></p>
 </div>
 </section>
 <!-- End  section About -->
  <!-- start section features -->
     <section class="features text-center ">
       <div class="container ">
     <h1> Our features </h1>
     <div class="row">
       <div class="feat">
       <div class="col-lg-3 col-md-6">
     <span class="glyphicon glyphicon-ok"></span>
     <h4>100% resposive</h4>
     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, illum, omnis ad aliquid nemo corrupti dicta corporis sapiente sed dolorem eos est voluptate optio sunt unde eveniet eius accusantium distinctio.</p>
     </div>
       </div>
       <div class="feat">
         <div class="col-lg-3 col-md-6">
       <span class="glyphicon glyphicon-thumbs-up"></span>
       <h4>100% resposive</h4>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa tenetur fugiat dolores libero. Nihil voluptatem eligendi autem porro laborum error alias excepturi, sed provident ut explicabo repellat velit quae quos?</p>
       </div>
         </div>
         <div class="feat">
           <div class="col-lg-3 col-md-6">
         <span class="glyphicon glyphicon-eye-open"></span>
         <h4>100% resposive</h4>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non laudantium recusandae earum at ducimus iure nostrum id magnam alias, nesciunt atque. Dolore, velit consectetur quaerat perferendis aspernatur molestiae ducimus quam?</p>
         </div>
           </div>
           <div class="feat">
             <div class="col-lg-3 col-md-6">
           <span class="glyphicon glyphicon-pencil"></span>
           <h4>100% resposive</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quasi minus aut, saepe quidem natus molestiae itaque quam a dolorem ducimus odio aspernatur quaerat perferendis maxime at iure aliquid consectetur.</p>
           </div>
             </div>
     </div>
     </div>
     </section>
  <!-- End section features -->

 <!-- start textimonials section -->
<section class="testimonials text-center">
  <Div class="container">
<h1> What Our Clients Say </h1>

<div id="myslide" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">

        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.</p>
     <span>Mohammad</span>
      </div>

    <div class="item">

        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.</p>
        <span>Yasmen</span>

      </div>

    <div class="item">

        <p class="lead"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quisquam debitis, neque enim dolore pariatur consequuntur adipisci sed odio dignissimos sit, unde mollitia vitae corrupti earum, nihil omnis quibusdam voluptatum.</p>
        <span>Osama</span>

      </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#myslide" data-slide-to="0" class="active">
      <img src="bootstrap/Css/images (1).jpg" alt="Mohammad">
    </li>
    <li data-target="#myslide" data-slide-to="1">
      <img src="bootstrap/Css/images.jpg" alt="Ahmad">
    </li>
    <li data-target="#myslide" data-slide-to="2">
      <img src="bootstrap/Css/images (1).jpg" alt="Mohammad">
    </li>
  </ol>
</Div>


  <!-- Controls -->

</div>
</div>
</div>
</section>
 <!-- End textimonials section -->
 <!-- start secion table -->
 <section class="price_table text-center">
   <div class="container">

     <h1>Our Amazing Price</h1>

     <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="price_box">
           <h2 class="text-primary">Hosting</h2>
           <p class="center-block">40$</p>
           <ul class="list-unstyled">
             <li>Space: 30GB</li>
             <li>Emails: 20</li>
             <li>Ips:2 ip</li>
             <li>Databases:10</li>
             <li>FtpAccounts:5</li>
           </ul>
           <a href="#" class="btn btn-primary">Order Now</a>
         </div>
       </div>
       <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="price_box">
          <h2 class="text-success">Vps</h2>
          <p class="center-block">50$</p>
          <ul class="list-unstyled">
            <li>Space: 50GB</li>
            <li>Emails: 30</li>
            <li>Ips:5 ip</li>
            <li>Databases:20</li>
            <li>FtpAccounts:10</li>
          </ul>
          <a href="#" class="btn btn-success">Order Now</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="price_box">
          <h2 class="text-info">Debilcated</h2>
          <p class="center-block">70$</p>
          <ul class="list-unstyled">
            <li>Space: 80GB</li>
            <li>Emails: 40</li>
            <li>Ips:8 ip</li>
            <li>Databases:30</li>
            <li>FtpAccounts:15</li>
          </ul>
          <a href="#" class="btn btn-info">Order Now</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="price_box">
          <h2 class="text-danger">Cloud</h2>
          <p class="center-block">90$</p>
          <ul class="list-unstyled">
            <li>Space: 90GB</li>
            <li>Emails: 50</li>
            <li>Ips:2 ip</li>
            <li>Databases:10</li>
            <li>FtpAccounts:50</li>
          </ul>
          <a href="#" class="btn btn-danger">Order Now</a>
        </div>
      </div>
     </div>
   </div>
 </section>

 <!-- End secion table -->


<!-- start section our team -->
<section class="our_team text-center">
  <div class="team">
    <div class="container">
  <h1>Meet Our Awesome Team</h1>
  <div class="row">

    <div class="col-lg-3 col-sm-6">
      <div class="person">
        <img class="img-circle" src="bootstrap/Css/images (1).jpg" alt="">
        <h3>Mohammad</h3>
        <i class="fab fa-snapchat"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-google"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-whatsapp"></i>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6">
      <div class="person">
        <img class="img-circle"src="bootstrap/Css/images (1).jpg" alt="">
        <h3>Mohammad</h3>
        <i class="fab fa-snapchat"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-google"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-whatsapp"></i>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6">
      <div class="person">
        <img class="img-circle"src="bootstrap/Css/images (1).jpg" alt="">
        <h3>Mohammad</h3>
        <i class="fab fa-snapchat-square fa-1x"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-google"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-whatsapp"></i>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6">
      <div class="person">
       <img class="img-circle"src="bootstrap/Css/images (1).jpg" alt="">
        <h3>Mohammad</h3>
        <i class="fab fa-snapchat"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-google"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-whatsapp"></i>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- End section our team -->
<!-- strat section subscribe -->
<section class="subscribe text-center">
  <div class=" container">
    <h1>Keep In Touch</h1>
    <p class="lead">Sipn Up Newsletter Dont Worry About Spam We Hate Lt Too. </p>
    <form class="form-inline">
    <input class="form-control input-lg" type="text"placeholder="Write Your Email">
    <button class="btn btn-danger btn-lg"><i class="fa fa-edit fa-lg"></i> Subscribe</button>
  </form>
  </div>
</section>
<!-- End section subscribe -->
<!-- start scetion stats -->
<section class="statistics text-center">
  <div class="data">
  <div class="container">
    <h1>Our Main Statistics</h1>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="stats">
          <i class="fas fa-users fa-5x"></i>
          <p> 9,550</p>
          <span>Saitsfied fa-users</span>
        </div>

      </div>
      <div class="col-md-3 col-sm-6">
        <div class="stats">
          <i class="fas fa-comments fa-5x"></i>
          <p>25,600</p>
          <span>Posted Comments</span>
        </div>

      </div>
      <div class="col-md-3 col-sm-6">
        <div class="stats">
          <i class="fas fa-suitcase fa-5x"></i>
          <p>3,260</p>
          <span> Projects Done</span>
        </div>

      </div>
      <div class="col-md-3 col-sm-6">
        <div class="stats">
          <i class="far fa-life-ring fa-5x"></i>
          <p>95,350</p>
          <span> Tickets Archieved</span>
        </div>

      </div>

    </div>

  </div>
</div>
</section>
<!-- End scetion stats -->
<!-- Startscetion skills -->
<section class="our-skills">
<div class="container">
  <h1 class="text-center"> Our Skills</h1>
  <div class="row">

    <div class="col-md-5">
    <div class="skills-progress">
      <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
            Html5/Css3
          </div>
        </div>
        <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
          Javascript/jquery
        </div>
        </div>
        <div class="progress">
        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
          PHP/MySQL
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-info progress-bar-striped active " role="progressbar" aria-valuenow="80" aria-valuemin="25" aria-valuemax="100" style="width: 25%;">
            Wordpress
        </div>
      </div>
    </div>
    </div>

    <div class="col-md-6 col-lg-offset-1">
        <div class="skills-info">
          <h3>About The Team</h3>
          <p class="lead">We Are spacialised Desiging And Porgramming About Web Design And Creatin Digital ldeas We Will Transfer Your To A Digital Draem And  Make Your Wish Come True </p>
          <button type="button" class="btn btn-primary">Talk With A Professional</button>
        </div>
    </div>
  </div>
</div>
</section>
<!-- End scetion skills -->
<!-- start scetion contact Us -->
<section class="contact-us text-center">
<div class="fields">
  <div class="container">
    <div class="row">
    <i class="fa fa-headphones fa-5x"></i>
          <h1>Tell Us What You Fell</h1>
          <p class="lead">Feel Free To Contact Us Anytime</p>
    <form role="form">
        <div class="col-md-6">
          <div class="form-group">
           <input type="text" class="form-control input-lg"placeholder="Username">
           </div>
           <div class="form-group">
            <input type="text" class="form-control input-lg"placeholder="Email">
           </div>
           <div class="form-group">
            <input type="text" class="form-control input-lg"placeholder="Cell phone">
             </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control input-lg" placeholder="Your Message"></textarea>
              </div>
              <button type="button" class="btn btn-danger btn-lg btn-block">Contact Us</button>
            </div>
          </div>
    </form>
  </div>
  </div>
  </div>
</section>
<!-- End scetion contact US -->

<!-- start  scetion Clients  -->
<section class="our-clients">
<div class="container">
<div class="row">
  <ul class="list-unstyled">
<li class="col-md-2 col-xs-4-">
  <img src="bootstrap/Css/Clients/44efe956c81a0185ba6f9dc287450ba1.png" alt="">
</li>
<li class="col-md-2 col-xs-4-">
  <img src="bootstrap/Css/Clients/b429c94ae2ecedd5b6fd3b53147f2966.png" alt="">
</li>
<li class="col-md-2 col-xs-4-">
  <img class="img-responsive-center-block" src="bootstrap/Css/Clients/e9a96c593553ced660df463709a55e8a.png" alt="">
</li>
<li class="col-md-2 col-xs-4-">
  <img class="img-responsive-center-block" src="bootstrap/Css/Clients/b429c94ae2ecedd5b6fd3b53147f2966.png" alt="">
</li>
<li class="col-md-2 col-xs-4-">
  <img class="img-responsive-center-block" src="bootstrap/Css/Clients/44efe956c81a0185ba6f9dc287450ba1.png" alt="">
</li>
<li class="col-md-2 col-xs-4-">
  <img class="img-responsive-center-block" src="bootstrap/Css/Clients/e9a96c593553ced660df463709a55e8a.png" alt="">
</li>
  </ul>

</div>
</div>
</section>
<!-- End scetion Clients  -->
<!-- start section footer -->
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h3>Sitemap</h3>
        <ul class="list-unstyled three-columns">
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Code</a></li>
          <li><a href="">Design</a></li>
          <li><a href="">Host</a></li>
          <li><a href="">Solutions</a></li>
          <li><a href="">Sitemap</a></li>
          <li><a href="">Company</a></li>
          <li><a href="">Contact</a></li>
        </ul>
        <ul class="list-unstyled one-icon">
          <li> <img src="bootstrap/Css/icons/facebook.png" alt=""></li>
          <li> <img src="bootstrap/Css/icons/google.png" alt=""></li>
          <li> <img src="bootstrap/Css/icons/instagram.png" alt=""></li>
          <li> <img src="bootstrap/Css/icons/snapchat.png" alt=""></li>
          <li> <img src="bootstrap/Css/icons/twitter.png" alt=""></li>
          <li> <img src="bootstrap/Css/icons/whatsapp.png" alt=""></li>
        </ul>
      </div>

  <div class="col-lg-4">
    <div class="mmm">
    <h3>Our Awesome Work</h3>
    <img class="img-thumbnail" src="bootstrap/Css/icons/whatsapp.png" alt="">
    <img class="img-thumbnail" src="bootstrap/Css/icons/snapchat.png" alt="">
    <img class="img-thumbnail" src="bootstrap/Css/icons/instagram.png" alt="">
    <img class="img-thumbnail" src="bootstrap/Css/icons/google.png" alt="">
  </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <h3>Latest Articles</h3>
    <div class="media">
        <a class="pull-left" href="#">
          <img class="madia-object" src="bootstrap/Css/icons/facebook.png" alt="">
        </a>
        <div class="madia-body">
          <h4 class="madia-heading">Programming</h4>
          This isSOme Text About Programming Describe The Madia Of Bootstrep
        </div>
        <div class="media">
          <a class="pull-left" href="#">
            <img class="madia-object" src="bootstrap/Css/icons/google.png" alt="">
          </a>
          <div class="madia-body">
            <h4 class="madia-heading">Coding</h4>
            This isSOme Text About Programming Describe The Madia Of Bootstrep
          </div>
          <div class="media">
            <a class="pull-left" href="#">
              <img class="madia-object" src="bootstrap/Css/icons/twitter.png" alt="">
            </a>
            <div class="madia-body">
              <h4 class="madia-heading">Web Design</h4>
              This isSOme Text About Programming Describe The Madia Of Bootstrep 3.2.0
            </div>

    </div>
  </div>
</div>
</div>
    </div>
  </div>
  <div class="copyright text-center">
    Copyrigt &copy;2021 <span>MoHmMad</span>.Net
  </div>
</section>
<!-- End section footer -->
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

@includ('layouts.master')
@yield('contet')


  <script src="{{URL::asset('bootstrap/js/jq.js')}}"></script>
  <script src="{{URL::asset('bootstrap/js/jq1.js')}}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="{{URL::asset('bootstrap/js/jquery.nicescroll.min.js')}}"></script>
</body>
</html>



