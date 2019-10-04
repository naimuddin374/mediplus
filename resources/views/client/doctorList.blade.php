@extends('master')
@section('content')
@include('client.top-header')
@include('client.nav')
<br><br><br>
<section class="ftco-section" id="doctor-section">
	<div class="container-fluid px-5">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4">Our Qualified Doctors</h2>
				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
			</div>
		</div>
		<div class="row">
            @if($data)
            @foreach($data as $item)
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
                    <h3 class="mb-2">{{$item->first_name}} {{$item->last_name}}</h3>
                    <p class="mb-2">{{$item->degree}}, {{$item->from}}</p>
						<span class="position mb-2">{{$item->specialist}}</span>
						<div class="faded">
							<p>{{$item->description}}</p>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
							<p><a href="#" class="btn btn-primary">Book now</a></p>
						</div>
					</div>
				</div>
            </div>
            @endforeach
            @endif
			{{-- <div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
						<h3 class="mb-2">Dr. Rachel Parker</h3>
						<span class="position mb-2">Ophthalmologist</span>
						<div class="faded">
							<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
							<p><a href="#" class="btn btn-primary">Book now</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
						<h3 class="mb-2">Dr. Ian Smith</h3>
						<span class="position mb-2">Dentist</span>
						<div class="faded">
							<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
							<p><a href="#" class="btn btn-primary">Book now</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
						<h3 class="mb-2">Dr. Alicia Henderson</h3>
						<span class="position mb-2">Pediatrician</span>
						<div class="faded">
							<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
							<p><a href="#" class="btn btn-primary">Book now</a></p>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</section>
@endsection
