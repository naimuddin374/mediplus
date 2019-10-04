@extends('master')
@section('content')
@include('client.top-header')
@include('client.nav')
<br><br><br>
@if(Session::has('message'))
<br>
<div class="container">
    <div class="alert alert-dismissible fade show {{ Session::get('type', 'alert-info') }}" role="alert">
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif
<div class="container">
	<div class="row d-flex">
		<div class="col-md-12 py-4">
            <h3 class="title float-left">Doctor Add</h3>
            <a href="{{url('/')}}/doctors/list" class="btn btn-primary btn-sm pull-right my-3"><i class="fa fa-eye"></i> Doctor List</a>
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-12 d-flex">
				<div class="appointment-wrap bg-white d-flex align-items-center">
                <form action="{{url('/')}}/doctors/store" method="POST" class="appointment-form ftco-animate">
                    @csrf
                <input type="hidden" name="id" value="{{@$data->id}}" />
						<div class="">
							<div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="firstName" value="{{@$data->first_name}}">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name" name="lastName" value="{{@$data->last_name}}">
							</div>
						</div>
						<div class="">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="specialist" id="" class="form-control">
											<option value="">Select Your Services</option>
                                        <option value="Neurology" @if(@$data->specialist=='Neurology') {{'selected'}} @endif>Neurology</option>
											<option value="Cardiology" @if(@$data->specialist=='Cardiology') {{'selected'}} @endif>Cardiology</option>
											<option value="Dental" @if(@$data->specialist=='Dental') {{'selected'}} @endif>Dental</option>
											<option value="Ophthalmology" @if(@$data->specialist=='Ophthalmology') {{'selected'}} @endif>Ophthalmology</option>
											<option value="Oter Servce" @if(@$data->specialist=='Oter Servce') {{'selected'}} @endif>Other Services</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone" name="contact" value="{{@$data->contact}}">
							</div>
						</div>
						<div class="">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"></div>
									<input type="text" class="form-control" placeholder="Degree" name="degree" value="{{@$data->degree}}">
								</div>
                            </div>
                            <div class="form-group">
								<div class="input-wrap">
									<div class="icon"></div>
									<input type="text" class="form-control" placeholder="From" name="came_from" value="{{@$data->from}}">
								</div>
							</div>
						</div>
						<div class="">
							<div class="form-group">
								<textarea name="description" id="" cols="30" rows="2" class="form-control" placeholder="Short Description">{{@$data->description}}</textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-secondary py-3 px-4">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
