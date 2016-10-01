@extends('layouts.app')

@section('title', 'view_all query')

@section('content')
   <div class="container">
    <div class="section">

  <div class="row">
    <div class="col-md-10">
       <h1>All Queries</h1>
       
</div>
<div class="col-md-4">

<dl class="dl-horizantal"> 
<div class="col-sm-2">
	 	<a href="{{route('query.create')}}" class= "btn btn-primary ">Ask Query</a>
	 </div>
</dl>
	
	 

</div> 
</div>


<!-- <div class="row"> -->
	
	<div class="col-md-12">
	<table class="table">
		<thead>
			<th>ids</th>
			<th>subject</th>
			<th>description</th>
			<th>created By</th>
			<th>created At</th>
			<th>updated At</th>
			<th>remarks</th>
		</thead>

		<tbody>

		@foreach ($query as $queries)

			<tr>
				<th> {{ $queries->id }}</th>
				<td>{{ substr($queries->subject,0,50) }} </td>
				<td>{{ substr($queries->description,0,100) }} {{strlen($queries->description)>100 ? "....." : ""}} </td>
				<td>{{ $queries->created_by  }} </td>
				<td>{{ $queries->created_at  }} </td>
				<td>{{ $queries->updated_at }} </td>
				<td><a href="{{ route('query.show',$queries->id) }}" class="btn btn-default">view </a></td>
			</tr>
			
			@endforeach


		</tbody>
	</table>
		
	</div>
<!-- </div> -->
      

   
  </div>
 
  </div>
 
@endsection