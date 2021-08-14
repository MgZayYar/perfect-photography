@extends('backend.master');

@section('content')

<div class="row shadow mb-4 container-fluid">
	<div class="col-lg-11">
		<h1 class="h3 mb-2 text-gray-800">Edit Package</h1>
			</div>
			<div class="col-lg-1 pl-5 ">            
		<a href="{{route('packages.index')}} "> <button type="button" class="btn btn-success active">Back</button></a>
	</div>
</div>

<div class="container-fluid">

<div class="card shadow mb-4">

<div class="card-body">

@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form method="post" action="{{route('packages.update',$package->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PUT') 
<div class="form-group row">
	<div class="col-lg-2">
		<label for="inputPhoto">Photo</label>
	</div>
	<div class="col-lg-10">
		<ul class="nav nav-tabs">
			<li class="nav-item" >
				<a href="#old" class="nav-link" data-toggle="tab">Old</a>
					</li>	
					<li class="nav-item" >
		<a href="#new" class="nav-link" data-toggle="tab">New</a>
</li>
</ul>

	<div class="tab-content">
		<div class="tab-pane fade show active" id="old">
			<img src="{{asset($package->photo)}} " class="img-fluid w-25">
			<input type="hidden" name="oldphoto" value="{{$package->photo}} ">
		</div>

	<div class="tab-pane " id="new" >
		<input type="file" class="form-control-file" id="inputPhoto" name="photo[]" accept="image/*" multiple>
	</div>	
	</div>
	</div>
</div>

<div class="form-group row">		
	<label for="Subphotography" class="col-sm-2 col-form-label">Subphotography </label>

<div class=" col-sm-10">
	<select class="custom-select form-control" name="subphotography_id" id="subphotography_id">
		<option selected>Choose Subphotography</option>
			@foreach ($subphotography as $subphotography)
				<option value="{{$subphotography->id}}"
					@if($package->subphotography_id==$subphotography->id)
								{{'selected'}}@endif>
								{{ $subphotography->name }}
				</option>               
			@endforeach
	</select>	
</div>		
</div>

<div class="form-group row">		
	<label for="Type" class="col-sm-2 col-form-label">Type</label>

<div class=" col-sm-10">
	<select class="custom-select form-control" name="type_id" id="type_id">
		<option selected>Choose Type</option>
			@foreach ($type as $type)
				<option value="{{$type->id}}"
					@if($package->type_id==$type->id)
								{{'selected'}} @endif>
								{{ $type->name }}
				</option>               
			@endforeach
	</select>	
</div>	
</div>

<div class="form-group row">
<div class="col-lg-2">
	<label for="price" class="form-label text-md-right">Price</label>
</div>

<div class="col-lg-10">
	<input type="text" name="price" id="price" class="form-control" placeholder="Price" required="" value="{{$package->price}}">
</div>
</div>

<div class="form-group mb-0">
	<button type="submit" class="btn btn-primary">Edit </button>
</div>

</form>
</div>
</div>
</div>
@endsection

