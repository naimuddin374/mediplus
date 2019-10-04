@extends('master')
@section('content')
@include('client.top-header')
@include('client.nav')
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
 	<div class="overlay"></div>
 	<div class="container">
 		<div class="row no-gutters slider-text align-items-end justify-content-start">
 			<div class="col-md-9 ftco-animate pb-4">
 				<h1 class="mb-3 bread">Appointment</h1>
 				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
 	<div class="container">
 		<div class="row d-flex">
 			<div class="col-md-6 col-lg-5 d-flex">
 				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
 				</div>
 			</div>
 			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
 				<div class="py-md-5">
 					<div class="row justify-content-start pb-3">
 						<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
 							<h2 class="mb-4">We Are <span>Mediplus</span> A Medical Clinic</h2>
 							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
 							<p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
 	<div class="container">
 		<div class="row d-flex">
 			<div class="col-md-7 py-5">
 				<div class="py-lg-5">
 					<div class="row justify-content-center pb-5">
 						<div class="col-md-12 heading-section ftco-animate">
 							<h2 class="mb-3">Our Services</h2>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
 							<div class="media block-6 services d-flex">
 								<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
 								<div class="media-body pl-md-4">
 									<h3 class="heading mb-3">Emergency Services</h3>
 									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
 								</div>
 							</div>
 						</div>
 						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
 							<div class="media block-6 services d-flex">
 								<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
 								<div class="media-body pl-md-4">
 									<h3 class="heading mb-3">Qualified Doctors</h3>
 									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
 								</div>
 							</div>
 						</div>
 						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
 							<div class="media block-6 services d-flex">
 								<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
 								<div class="media-body pl-md-4">
 									<h3 class="heading mb-3">Outdoors Checkup</h3>
 									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
 								</div>
 							</div>
 						</div>
 						<div class="col-md-6 d-flex align-self-stretch ftco-animate">
 							<div class="media block-6 services d-flex">
 								<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
 								<div class="media-body pl-md-4">
 									<h3 class="heading mb-3">24 Hours Service</h3>
 									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-5 d-flex">
 				<div class="appointment-wrap bg-white p-5 d-flex align-items-center">
 					<form action="#" class="appointment-form ftco-animate">
 						<h3>Free Consultation</h3>
 						<div class="">
 							<div class="form-group">
 								<input type="text" class="form-control" placeholder="First Name">
 							</div>
 							<div class="form-group">
 								<input type="text" class="form-control" placeholder="Last Name">
 							</div>
 						</div>
 						<div class="">
 							<div class="form-group">
 								<div class="form-field">
 									<div class="select-wrap">
 										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
 										<select name="" id="" class="form-control">
 											<option value="">Select Your Services</option>
 											<option value="">Neurology</option>
 											<option value="">Cardiology</option>
 											<option value="">Dental</option>
 											<option value="">Ophthalmology</option>
 											<option value="">Other Services</option>
 										</select>
 									</div>
 								</div>
 							</div>
 							<div class="form-group">
 								<input type="text" class="form-control" placeholder="Phone">
 							</div>
 						</div>
 						<div class="">
 							<div class="form-group">
 								<div class="input-wrap">
 									<div class="icon"><span class="ion-md-calendar"></span></div>
 									<input type="text" class="form-control appointment_date" placeholder="Date">
 								</div>
 							</div>
 							<div class="form-group">
 								<div class="input-wrap">
 									<div class="icon"><span class="ion-ios-clock"></span></div>
 									<input type="text" class="form-control appointment_time" placeholder="Time">
 								</div>
 							</div>
 						</div>
 						<div class="">
 							<div class="form-group">
 								<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
 							</div>
 							<div class="form-group">
 								<input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
 							</div>
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-section bg-light">
 	<div class="container">
 		<div class="row justify-content-center mb-5 pb-5">
 			<div class="col-md-10 heading-section text-center ftco-animate">
 				<h2 class="mb-4">Gets Every Single Updates Here</h2>
 				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
 			</div>
 		</div>
 		<div class="row d-flex">
 			<div class="col-md-4 ftco-animate">
 				<div class="blog-entry">
 					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
 					</a>
 					<div class="text d-block">
 						<div class="meta mb-3">
 							<div><a href="#">June 9, 2019</a></div>
 							<div><a href="#">Admin</a></div>
 							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
 						</div>
 						<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
 						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 						<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
 					</div>
 				</div>
 			</div>

 			<div class="col-md-4 ftco-animate">
 				<div class="blog-entry">
 					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
 					</a>
 					<div class="text d-block">
 						<div class="meta mb-3">
 							<div><a href="#">June 9, 2019</a></div>
 							<div><a href="#">Admin</a></div>
 							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
 						</div>
 						<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
 						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 						<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
 					</div>
 				</div>
 			</div>

 			<div class="col-md-4 ftco-animate">
 				<div class="blog-entry">
 					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
 					</a>
 					<div class="text d-block">
 						<div class="meta mb-3">
 							<div><a href="#">June 9, 2019</a></div>
 							<div><a href="#">Admin</a></div>
 							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
 						</div>
 						<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
 						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
 						<p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
@endsection
