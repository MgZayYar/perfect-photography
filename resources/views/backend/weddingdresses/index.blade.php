@extends('backend.master');
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="row shadow  mb-4 container-fluid">
	<div class="col-lg-11">
		<h1 class="h3 mb-2 text-gray-800">Wedding Dress</h1>
	</div>
	<div class=" col-lg-1 ">            
		<a href="{{route('weddingdresses.create')}} "> <button type="button" class="btn btn-success active">AddNew</button></a>
	</div>
</div>
<div class="card-table ">
	<div class="table-responsive">
		
		<table class="table table-bordered" id="dataTable" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Photo</th>		
					<th>Actions</th>			
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Photo</th>			
					<th>Actions</th>
				</tr>
			</tfoot>
			<tbody>
				@php $i=1; @endphp
                    
                @foreach($weddingdress as $row)
				<tr>
					<td>{{$i++}} </td>
					<td><img src="{{asset($row->photo)}}" class="img-fluid w-25" width="100" height="100"></td>
					<td><a href="{{route('weddingdresses.edit',$row->id)}} " class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('weddingdresses.destroy',$row->id)}} " onsubmit="return confirm('Are you sure?')">
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