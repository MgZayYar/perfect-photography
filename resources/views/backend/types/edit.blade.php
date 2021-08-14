@extends('backend.master');

@section('content')
<div class="row shadow mb-4 container-fluid">
	<div class="col-lg-11">
		<h1 class="h3 mb-2 text-gray-800">Edit Type</h1>
			</div>
				<div class="col-lg-1 pl-5 ">            
				<a href="{{route('types.index')}} "> <button type="button" class="btn btn-success active">Back</button></a>
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
<form method="post" action="{{route('types.update',$type->id)}}" enctype="multipart/form-data">
	@csrf
		@method('PUT') 
			<div class="form-group row">
				<div class="col-lg-2">
				<label for="name" class="form-label text-md-right">Type Name</label>
			</div> 
		<div class="col-lg-10">
	<input type="text" name="name" id="name" class="form-control" placeholder="Type Name" required="" value="{{$type->name}}">
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
		<img src="{{asset($type->photo)}} " class="img-fluid w-25">
		<input type="hidden" name="oldphoto" value="{{$type->photo}} ">
	</div>

	<div class="tab-pane " id="new" >
		<input type="file" name="photo" class="form-control-file" id="inputPhoto" accept="image/*" >
	</div>
</div>

</div>
</div>
</div>
<div class="form-group mb-0">
<button type="submit" class="btn btn-success">Edit </button>
	</div>
		</form>
		</div>
	</div>
</div>
@endsection

