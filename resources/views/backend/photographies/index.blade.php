@extends('backend.master');

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
	<div class="row shadow  mb-4 container-fluid">
		<div class="col-lg-11">
			<h1 class="h3 mb-3 text-gray-800">Photography</h1>
				</div>
				<div class=" col-lg-1 ">            
			<a href="{{route('photographies.create')}}"> <button type="button" class="btn btn-success active">AddNew</button></a>
		</div>
	</div>
<div class="card-table ">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>	
			<th>Actions</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>No</th>
			<th>Name</th>			
			<th>Actions</th>
		</tr>
	</tfoot>
	<tbody>
		@php $i=1; @endphp

		@foreach($photographies as $row)
		<tr>
			<td>{{$i++}} </td>
			<td>{{$row->name}}</td>
			<td>
			<div class="row" >
			<a href="{{route('photographies.edit',$row->id)}}" class="btn btn-warning" style="width: 100; height: 50">Edit</a>
 
			<form method="post" action="{{route('photographies.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?') " >
				@csrf
				@method('DELETE')
				<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger" style="width: 100; height: 50">
			</form>

			</div>
			</td>
		</tr>
		@endforeach
	</tbody>	
	
</table>
</div>
</div>

@endsection

@section('script')
<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}} "></script>

<script type="text/javascript" src="{{asset('backendtemplate/js/demo/datatables-demo.js')}} "></script>

<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}} "></script>
@endsection

