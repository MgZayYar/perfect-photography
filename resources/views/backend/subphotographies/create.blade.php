@extends('backend.master');
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="row shadow mb-4 container-fluid">
  <div class="col-lg-11">
    <h1 class="h3 mb-2 text-gray-800">Create Subphotography</h1>
      </div>
        <div class=" col-lg-1 pl-5 ">            
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
<form method="post" action="{{route('subphotographies.store')}}" enctype="multipart/form-data">
  @csrf 
 <div class="form-group row">
      	<div class="col-lg-2">
        	<label for="name" class="form-label text-md-right">Subphotography</label>
        		</div> 
      			<div class="col-lg-10">
    		<input type="text" name="name" id="name" class="form-control" placeholder="Subphotography Name" required="required">
        </div>
	</div>
 <div class="form-group row">		
	<label for="photographyName" class="col-sm-2 col-form-label">Photography</label>		<div class=" col-sm-10">
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
	<label for="inputPhoto" class="col-form-label text-md-right">Photo</label>
		</div>
    		<div class="col-sm-10">
        		<input type="file" class="form-control-file" id="inputPhoto" name="photo" accept="image/*" required="required">
            	</div>
            </div>
		<div class="form-group mb-0">
  	<button type="submit" class="btn btn-success">Save </button>
</div>
</form>
</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}} "></script>

<script type="text/javascript" src="{{asset('backendtemplate/js/demo/datatables-demo.js')}} "></script>

<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}} "></script>
@endsection