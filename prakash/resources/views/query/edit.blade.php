 @extends('layouts.app')

@section('title', 'query edit')

@section('content')
   <div class="container">
    <div class="section">

  <div class="row">


        {!! Form::model($query,array('route'=>['query.update',$query->id],'method'=>'PUT' ))!!}
        {{ Form::label('subject','subject:')}}
        {{ Form::text('subject',null,array('class'=>'form-control'))}}
        {{ Form::label('description','Description:')}}
        {{ Form::textarea ('description',null,array('class'=>'form-control'))}}
          
        	{{Form::submit('Save change', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}

          {{Form::submit('Cancel', array('class'=>'btn btn-danger btn-lg btn-block',' style'=>'margin-top:20px;'))}}
        	{!! Form::close() !!}
       

      
   
  </div>
 
  </div>
  </div
@endsection