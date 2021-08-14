@extends('backend.master');
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="row shadow  mb-4 container-fluid">
	<div class="col-lg-11">
		<h1 class="h3 mb-2 text-gray-800">Package</h1>
	</div>
	<div class=" col-lg-1 ">            
		<a href="{{route('packages.create')}}"><button type="button" class="btn btn-success active"> AddNew </button> 
		</a>
	</div>
</div>
<div class="card-table">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Subphotography_id</th>
					<th>Type_id</th>
					<th>Price</th>		
					<th>Actions</th>			
				</tr>
			</thead>
			<tfoot>
				<tr>
					<<th>No</th>
					<th>Subphotography_id</th>
					<th>Type_id</th>
					<th>Price</th>		
					<th>Actions</th>
				</tr>
			</tfoot>

			<tbody>
				@php $i=1; @endphp
                    
                @foreach($package as $row)
				<tr>
					<td>{{$i++}} </td>					
					<td>{{$row->subphotography_id}}</td>					
					<td>{{$row->type_id}}</td>
					<td>{{$row->price}}</td>
					<td><a href="{{route('packages.edit',$row->id)}} " class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('packages.destroy',$row->id)}} " onsubmit="return confirm('Are you sure?')">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>

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