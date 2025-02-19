@extends('layouts.base')

@section('title')
Health Care  | Home
@endsection

@section('body')
   <!--  Debut slider -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url({{asset('images/bg_1.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to our chiropractic centre</h1>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			            <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url({{asset('images/bg_2.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Chiropractic care for the whole family</h1>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			            <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	</div>
	<!-- fin slider -->
 
	<!-- consulation section -->
	  <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-12">
	    			<div class="wrap-appointment d-md-flex">
		    			<div class="col-md-8 bg-primary p-5 heading-section heading-section-white">
		    				<span class="subheading">Booking an Appointment</span>
		    				<h2 class="mb-4">Free Consultation</h2>
		    				<form action="#" class="appointment">
		    					<div class="row justify-content-center">
										<div class="col-md-6">
											<div class="form-group">
					              <input type="text" class="form-control" placeholder="Your Name">
					            </div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					              <input type="text" class="form-control" placeholder="Phone number">
					            </div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					    					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">Select Services</option>
			                        <option value="">Spinal Manupulation</option>
			                        <option value="">Electrotherapy</option>
			                        <option value="">Manual Lymphatic</option>
			                        <option value="">Medical Acupuncture</option>
			                        <option value="">Therapeutic Exercise</option>
			                        <option value="">Joint Mobilization</option>
			                      </select>
			                    </div>
					              </div>
					    				</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					    					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">Select Chiropractor</option>
			                        <option value="">John Doe</option>
			                        <option value="">William Smith</option>
			                        <option value="">Danny Green</option>
			                        <option value="">Jason Thompson</option>
			                      </select>
			                    </div>
					              </div>
					    				</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					    					<div class="input-wrap">
					            		<div class="icon"><span class="fa fa-calendar"></span></div>
					            		<input type="text" class="form-control appointment_date" placeholder="Date">
				            		</div>
					    				</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					    					<div class="input-wrap">
					            		<div class="icon"><span class="fa fa-clock-o"></span></div>
					            		<input type="text" class="form-control appointment_time" placeholder="Time">
				            		</div>
					    				</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					              <input type="submit" value="Send message" class="btn btn-secondary py-3 px-4">
					            </div>
										</div>
		    					</div>
			          </form>
		    			</div>
		    			<div class="col-md-4 bg-white text-center p-5">
		    				<div class="desc border-bottom pb-4">
		    					<h2>Business Hours</h2>
			              <div class="opening-hours">
			              	<h4>Opening Days:</h4>
			              	<p class="pl-3">
			              		<span><strong>Monday – Friday:</strong> 9am to 20 pm</span>
			              		<span><strong>Saturday :</strong> 9am to 17 pm</span>
			              	</p>
			              	<h4>Vacations:</h4>
			              	<p class="pl-3">
			              		<span>All Sunday Days</span>
			              		<span>All Official Holidays</span>
			              	</p>
			              </div>
		    				</div>
								<div class="desc pt-4 ">
									<h3 class="heading">For Emergency Cases</h3>
									<span class="phone">(+01) 123 456 7890</span>
								</div>
		    			</div>
		    		</div>
		    	</div>
    		</div>
    	</div>
    </section>
    <!-- fin consultatin section -->

	<!-- Section des services -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">We offer Services</span>
            <h2>Our Benefits</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-chiropractic"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Spinal Manupulation</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-acupuncture"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Medical Acupuncture</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div> 

          </div>

        </div>
    	</div>
    </section>
	<!-- fin Section des services -->

	<!-- Docteurs sections  -->
    <section class=" ftco-section ftco-no-pb ftco-no-pt">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Team &amp; Staff</span>
            <h2>Our Experts Chiropractor / Therapist</h2>
          </div>
        </div>
				<div class="row no-gutters">
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('images/staff-1.jpg')}});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Lloyd Wilson</h3>
								<span class="position mb-2">Chief Medical Officer</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>	
				</div>
			</div>
		</section>
   	<!-- fin Docteurs sections  -->

	   <!-- About section -->
    <section style="margin-top: 50px;" class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex order-md-last">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url({{asset('images/about.jpg')}});">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pr-md-5 py-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Chiropractic</span>
		            <h2 class="mb-4">About Chiropractic</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		          </div>
		        </div>
						<div class="row ftco-counter pb-5" id="section-counter">
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="45">0</strong>
		              </div>
		              <div class="text">
		              	<span>Years of <br>Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="2342">0</strong>
		              </div>
		              <div class="text">
		              	<span>Happy <br>Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		              </div>
		              <div class="text">
		              	<span>Award <br>Winning</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
	 <!-- fin About section -->

	 <!-- debut blog section -->
		<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('images/image_1.jpg')}}');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url(images/person_2.jpg);"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- fin blog section  -->

  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    @endsection