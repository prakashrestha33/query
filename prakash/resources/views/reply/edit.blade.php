 @extends('layouts.app')

@section('title', 'reply edit')

@section('content')
   <div class="container">
    <div class="section">

  <div class="row">


        {!! Form::model($reply,array('route'=>['reply.update',$reply->id],'method'=>'put' ))!!}
        
        {{ Form::label('comment',' edit comment:')}}
        {{ Form::textarea ('comment',null,array('class'=>'form-control'))}}
           {{ Form::hidden('created_by',Auth::user()->name )}}
            {{ Form::hidden('query_id',Auth::user()->name)}}
        	{{Form::submit('Save changes', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}

          {{Form::submit('Cancel', array('class'=>'btn btn-danger btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
        	{!! Form::close() !!}
        
        @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('flash_message') }}
                                </div>
                            @endif

      
   
  </div>
 
  </div>
  </div>
@endsection