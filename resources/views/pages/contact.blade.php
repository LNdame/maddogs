@extends('layouts.app')

@section('content')

<!-- Content Row -->

 <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h1 class="text-secondary mb-0">Contact Us</h1>
          <h2 class="mb-5">Drop us a line, anytime!</h2>
        </div>
        <div class="row justify-content-center">
           <div class="col-sm">South End Port Elizabeth, 6002</div>
           <div class="col-sm"><abbr title="Email">E</abbr>:
                  masixole.m@tsenene.co.za</div>
           <div class="col-sm"><abbr title="Hours">H</abbr>: Mon - Fri: 9:00 to 17:00</div>
           <div class="col-sm"><abbr title="Phone">P</abbr>: 041 076 9889  </div></div>

        </div>
      </div>
    </section>

<!-- Page Heading/Breadcrumbs -->
      
      
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->
      
           
             
          
      

    

    <!-- /.container -->
 <!-- Map -->
    <section id="contact" class="map">
    <!--  <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=16+ter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=-33.96812,25.620067&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe> -->

<iframe width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;coord=-33.96812,25.620067&amp;q=16%20BrickmakersKloof%2C%20South%20End%20%2C%20Port%20Elizabeth+(Tsenene%20Capital)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe>


      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=16%20BrickmakersKloof%2C%20South%20End%20%2C%20Port%20Elizabeth+(Tsenene%20Capital)&amp;aq=0&amp;oq=twitter&amp;sll=-33.96812,25.620067&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+BrickmakersKloof+Street,+South+End,+Port+Elizabeth&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>

@endsection