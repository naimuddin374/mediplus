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
		<div class="col-md-12 py-5">
            <h3 class="title float-left">Doctors List</h3>
            <a href="{{url('/')}}/doctors/add" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Add New</a>

			<table class="table">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Specialist</th>
						<th>Degree</th>
						<th>From</th>
						<th>Contact</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    @if($data)
                    @foreach ($data as $item)
                        <tr>
                            <td><img src="{{url('/')}}/images/doc-2.jpg" height="80"/></td>
                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                            <td>{{$item->specialist}}</td>
                            <td>{{$item->degree}}</td>
                            <td>{{$item->from}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                            <a href="{{url('/')}}/doctors/edit/{{$item->id}}" class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit"></i> Edit</a>
                            <a href="{{url('/')}}/doctors/delete/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
