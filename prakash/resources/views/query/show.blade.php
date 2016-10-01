@extends('layouts.app')

@section('title', 'query view')

@section('content')
   <div class="container">
    <div class="section">
        <div class="row" >

        <div class="col-md-8">
            <div class="well"  style="border-color: #5bc0de; background-color: #eae5ab">
                <dl class="dl-horizantal">

                    <h3>{{  $query->subject}}</h3>
                   

                      <dl class="dl-horizantal">
                    <dt>description:</dt>
                    <dd> {{$query->description}}</dd>


                </dl>

                     <div class="row">
                        <h6 style="text-align: right">Questioned By:  {{ $query->created_by }} </h6>
                        <h6 style="text-align: right">{{ date('M j, Y h :i A',strtotime($query->created_at) )}}</h6>
                         <h6 style="text-align: right">{{ date('M j, Y h :i A',strtotime($query->updated_at) )}}</h6>
                        @if(( $query->created_by)== Auth::user()->name )
                             <div class="col-sm-6"> 
                          {!! Html::linkRoute('query.edit','Edit',array($query->id),array('class'=>'btn btn-primary btn-block'))!!}
                            
                            {!! Form::open(['method' => 'DELETE','route' => ['query.destroy', $query->id]]) !!}
                                    {!! Form::submit('Delete question?', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}



                           
                           <!--  {!! Html::linkRoute('query.destroy','Delete',array($query->id),array('class'=>'btn btn-danger btn-block','method'=>'post'))!!}
                            -->



                    </div>
                    @endif

                </dl>
             
                @foreach($reply as $replies)
                    @if($replies->created_by == $query->created_by )
                        <div   class="col-md-13" >
                            <div class="well" style="border-color: #1de9b6; background-color: #e2e0ce" >
                            @else
                                <div class="col-md-offset-2" >
                                    <div class="well" style="border-color: #1de9b6; background-color: #d8eae5" >
                                    @endif


                            <textarea readonly class="well" style="width: 550px; height: 250px;">{{  $replies->comment}}</textarea>

                            <h6 style="text-align: right">Replied By: {{ $replies->created_by }}</h6>

                            <h6 class="lead" style="text-align: right; -moz-text-size-adjust: @parent"> {{ date('M j, Y h :i A',strtotime($replies->created_at))}}</h6>
                             <h6 class="lead" style="text-align: right; -moz-text-size-adjust: @parent"> {{ date('M j, Y h :i A',strtotime($replies->updated_at))}}</h6>
                             @if(( $replies->created_by)== Auth::user()->name )
                             <div class="col-sm-2"> 
                             {!! Html::linkRoute('reply.edit','Edit',array($replies->id),array('class'=>'btn btn-primary btn-block'))!!}

                          {!! Form::open(['method' => 'DELETE','route' => ['reply.destroy', $replies->id]]) !!}
                                    {!! Form::submit('Delete reply?', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                             
                            

                             
                    </div>
                    @endif
                                    </div>


                    </div>

                @endforeach





            </div>


        </div>


<div class="col-md-4">
<div class="well">
 
 <dl class="dl-horizantal">  
 <dt>created at:  </dt> 
 <dd> {{ date('M j, Y h :i A',strtotime($query->created_at) )}}</dd> 
 </dl> 
 <dl class="dl-horizantal">  
 <dt>updated at:</dt> 
 <dd> {{ date('M j, Y h :i A',strtotime($query->updated_at))}} </dd> 


 </dl> 
	  <hr> 
	  
 </div> 


    <div class="row">


        {!! Form::open(array('route'=>'reply.store'))!!}
        {{ Form::label('comment','Your Reply:')}}
        {{ Form::textarea ('comment',null,array('class'=>'form-control','name'=>'comment','id'=>'comment', 'style'=>'height: 500px;  '))}}
        {{ Form::hidden('created_by',Auth::user()->name )}}
        {{ Form::hidden('query_id',$query->id )}}
        {{Form::submit('Reply', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}




    </div>
  </div>



        </div>

        </div>

  </div>



@endsection
         <script> 

             CKEDITOR.replace( 'comment' ); 
         </script> 





