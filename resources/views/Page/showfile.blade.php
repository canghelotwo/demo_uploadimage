@extends('layout')
@section('content')
<main id="main" class="">
	<div style="margin-bottom: 10px">
		<button>
			<a  href="upload" >
		        <span>Upload</span>
		    </a>
		</button>
    </div>
    <div>
		<table style="border: 1px solid black">
	        <thead>
	          <tr>
	          	<th>ID</th>
	            <th>Image</th>
	          </tr>
	        </thead>
	        <tbody>
	       	@foreach($image as  $img)
	          <tr>
	          	<td>{{$img->id}}</td>
	            <td><img src="{{asset($img->image)}}" height="100" width="100"></td>
	          </tr>
	         @endforeach
	        </tbody>
	    </table>
    </div>
</main>
@endsection