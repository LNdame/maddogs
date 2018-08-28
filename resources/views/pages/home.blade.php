@extends('layouts.app')

@section('content')

<header class="masthead d-flex">
      <div class="container text-center my-auto">

<img class="card-img-top img-responsive img-responsive" style="width:300px; height: 150px;" src="img/final_logo.png" alt="partner">

        <h1 class="mb-1 text-white ">TSENENE Capital</h1>
        <h3 class="mb-5 text-white ">
          <em>Developing, empowering and supporting start-up companies, <br/>SMME’s and entrepreneurs with visionary ideas</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
      </div>
      <div class="overlay"></div>


    </header>



    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Adding Value to</h2>
          <p class="lead">SMME's, Entrepreneurs, and the Local Economy.</p>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="  width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img class="card-img-top img-responsive img-responsive" src="images/value.jpg" alt="value">

        </div>
      </div>
      <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Your Partner</h2>
          <p class="lead">Entrepreneurship is daunting...if you are alone! </p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img class="card-img-top img-responsive img-responsive" src="images/partner.jpg" alt="partner">
        </div>
      </div>
    </div>


     <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">TSENENE Capital</h3>
          <h2 class="mb-5">What you get</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Ratings</h2>
                  <p class="mb-0">We analyse your business, project and assess it viability and funding capacity</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Enterprise Development</h2>
                  <p class="mb-0">Connect enterprise development resources with deserving and high potential small enterprises and technology start-ups</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Giving you a headstart</h2>
                  <p class="mb-0">Reduce operational costs.  Get funding. Develop entrepreneurial and business skills. </p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Progressive</h2>
                  <p class="mb-0">Cutting-edge offering of services and programmes that focus on building profitable, sustainable and award-winning small enterprises.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

   
<!-- End Portfolio -->

    
   
        <!-- END .gtco-testimonials -->

@endsection
