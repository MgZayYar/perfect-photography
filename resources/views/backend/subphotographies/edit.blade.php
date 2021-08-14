@extends('backend.master');

@section('content')

<div class="row shadow mb-4 container-fluid">
<div class="col-lg-11">
<h1 class="h3 mb-2 text-gray-800">Edit Subphotography</h1>
</div>
<div class="col-lg-1 pl-5 ">            
<a href="{{route('subphotographies.index')}} "> <button type="button" class="btn btn-success active">Back</button></a>
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
<form method="post" action="{{route('subphotographies.update',$subphotography->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT') 

<div class="form-group row">
	<div class="col-lg-2">
		<label for="name" class="form-label text-md-right">Subphotography</label>
	</div> 
	<div class="col-lg-10">
		<input type="text" name="name" id="name" class="form-control" placeholder="Subphotography Name" required="" value="{{$subphotography->name}}">
	</div>
</div>

 <div class="form-group row">		
	<label for="photographyName" class="col-sm-2 col-form-label">Photography</label>
			<div class=" col-sm-10">
			<select class="custom-select form-control" name="photography_id" id="photography_id">
				<option selected>Choose Photography</option>
				@foreach ($photographies as $photography)
			<option value="{{$photography->id}}" >
		{{ $photography->name }} </option>               
	@endforeach
</select>	
</div>
</div>

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
				<img src="{{asset($subphotography->photo)}} " class="img-fluid w-25">
				<input type="hidden" name="oldphoto" value="{{$subphotography->photo}} ">
			</div>

			<div class="tab-pane " id="new" >
				<input type="file" name="photo" class="form-control-file" id="inputPhoto" accept="image/*" >
			</div>
		</div>

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

