@extends('layouts.app')

@section('content')

<div >
      
      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="images/about.jpeg" alt="about"  style="width:100%;">

       <h1 class="mb-1 text-white centered ">About Us <br/> Get to know us a little more</h1>
 
    
</div>

<div class="container">

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4 img-responsive" src="images/businessservices.jpg" alt="">
    </div>
    <div class="col-lg-6">
      <h2>About Tsenene Capital</h2>
      <p>1) Assisting entrepreneurs in develop their business and exposing them to investors</p>
      <p>2) Link funders (public and private) with businesses that have gone through Tsenene's ED, Operational Excellence and Due Diligence process</p>
      <p>3) Implement corporate and government SME development initiatives and projects</p>
      <p>4) Provide expert consultancy in local economic development related areas of development</p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Team Members -->
  <h2>Our Team is</h2>

  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top img-responsive img-responsive" src="images/youth.jpeg" alt="culture">
        <div class="card-body">
          <h4 class="card-title">Young</h4>
          <h6 class="card-subtitle mb-2 text-muted">Yet experienced!</h6>
          <p class="card-text">We are a vibrant, diverse team that not only taps into the spirit of our youth but on the various backgrounds,<em> that is our greatest strength</em>. We boast high level of qualification and expertise in the areas of business consulting and information systems..</p>
        </div>
        <div class="card-footer">
          <a style="color: #ECB807" href="{{url('/contact')}}">Contact us</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top img-responsive" src="images/target.jpeg" alt="target">
        <div class="card-body">
          <h4 class="card-title">Goals and Action Plans</h4>
          <h6 class="card-subtitle mb-2 text-muted">Oriented</h6>
          <p class="card-text">New business professionals don’t always get the support they need, even with moral leadership, so the ideal new business professional has to ‘drive the ship’ regardless of what materials they have, without waiting or making excuses - We are your excuses now, we are here to help.</p>
        </div>
        <div class="card-footer">
          <a style="color: #ECB807" href="{{url('/contact')}}">Contact us</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top img-responsive" src="images/curious.jpg" alt="curious">
        <div class="card-body">
          <h4 class="card-title">Curious</h4>
          <h6 class="card-subtitle mb-2 text-muted">That should be our middle name</h6>
          <p class="card-text">We actively pursue a unique culture centralised around a curious mindset in our agency, and our industry, the client’s persona and category, thus to have a greater understanding of the true value of our business proposition. The bottom line is that curious people build stronger relationships and that is the essence of a great of our agency.</p>
        </div>
        <div class="card-footer">
          <a  style="color: #ECB807" href="{{url('/contact')}}">Contact us</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

  <!-- Our Customers -->
  <h2>Our Partners</h2>
  <div class="row">
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid img-responsive" src="images/partner1.jpg" alt="INQB8 BT">
    </div>

<!--
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid img-responsive" src="http://placehold.it/500x300" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid img-responsive" src="http://placehold.it/500x300" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid img-responsive" src="http://placehold.it/500x300" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid img-responsive" src="http://placehold.it/500x300" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid img-responsive" src="http://placehold.it/500x300" alt="">
    </div>
-->

  </div>
</div><br><br>
  <!-- /.row -->
 </div>


@endsection
