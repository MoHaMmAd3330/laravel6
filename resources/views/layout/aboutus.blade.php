
@extends('home')

@section('content')


<section class="option-box">
    <div class="color-option">
    <h4>Color Option</h4>
    <ul class="list-unstyled">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    </div>
    <i class="fa fa-gear fa-3x gear-check"></i>
    </section>
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
@stop
