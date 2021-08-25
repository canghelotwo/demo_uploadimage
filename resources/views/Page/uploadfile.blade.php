@extends('layout')
@section('content')
<main id="main" class="">
	<form role="form" action="{{ route('save')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="image" class="form-control" id="exampleInputEmail1" required="true">
		<button type="submit" name="upload" class="btn btn-info">Upload</button>
	</form>
</main>
@endsection