@extends('layouts.app')

@section('content')

 


<!-- Page Heading/Breadcrumbs -->
      
<div >
      
      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="images/servicehd.jpeg" alt="ensemble"  style="width:100%;">

       <h1 class="mb-1 text-grey centered ">Our Services <br/><em> What we do, is what we do best</em> </h1>
 
    
</div>
     <div class="container" >
      <h1 class="mt-4 mb-3">Our Services
        
      </h1>
      <!-- Marketing Icons Section -->
      <div class="row">

      

        <div class="col-lg-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Pre Due and Due Diligence</h4>
            <div class="card-body">
              <p class="card-text"> <ul>
                <li>Determining viability of operating business</li>
                               <li>     Assessment of finances</li>
                               <li>     Assessment of operations</li>
                                 <li>   Assessment of entrepreneur's capacity</li>
                                 <li>   Assessment of past & current performance</li>

                                 </ul>
                  </p>
            </div>
            <div class="card-footer">
              <a href="{{url('/contact')}}" class="btn btn-secondary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Enterprise Development</h4>
            <div class="card-body">
              <p class="card-text"><ul>
               <li> Development of feasibility studies</li>
                               <li>   Development of business plans</li>
                              <li>    Develop forecasts and projects</li>
                              <li>    Training and development</li>

                            </ul>
                </p>
            </div>
            




            <div class="card-footer">
              <a href="{{url('/contact')}}" class="btn btn-secondary">Learn More</a>
            </div>
          </div>
        </div>

 </div>


<div class="row">



        <div class="col-lg-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Business  <br/> Assistance </h4>
            <div class="card-body">
              <p class="card-text">
                      <ul>
               <li> Develop operating manuals<br/></li>
                            <li>      Drive operational efficiency<br/></li>
                           <li>       Facilitate access to markets</li>
                           <li>       Implement performance enhancing tools i.e. OKRs</li>

                                  </ul>
                      </p>
            </div>


            <div class="card-footer">
              <a href="{{url('/contact')}}" class="btn btn-secondary">Learn More</a>
            </div>
          </div>
        </div>
  


        <div class="col-lg-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Services   <br/> For Government </h4>
            <div class="card-body">
              <p class="card-text"><ul>
                  <li>Economic and SME development Consulting services<br/></li>
                                    <li>Sectorial studies<br/></li>
                                    <li>Developing of Local Economic Development strategies<br/></li>
                                    <li>Oversight and administer funds<br/></li>
                                    <li>Implementing approved projects<br/></li>

                                  </ul>
                      </p>
            </div>


            <div class="card-footer">
              <a href="{{url('/contact')}}" class="btn btn-secondary">Learn More</a>
            </div>
          </div>
        </div>
      



      <!-- /.row -->
      </div>

      


    </div>



@endsection