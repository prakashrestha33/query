 @extends('layouts.app')

@section('title', 'query create')

@section('content')
   <div class="container">
    <div class="section">

  <div class="row">


        {!! Form::open(array('route'=>'query.store'))!!}
        {{ Form::label('subject','subject:')}}
        {{ Form::text('subject',null,array('class'=>'form-control'))}}
        {{ Form::label('description','Description:')}}
        {{ Form::textarea ('description',null,array('class'=>'form-control'))}}
          {{ Form::hidden('created_by',Auth::user()->name )}}
        	{{Form::submit('Create Query', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
        	{!! Form::close() !!}
       

      
   
  </div>
 
  </div>
  </div>
@endsection