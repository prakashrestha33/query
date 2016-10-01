@extends('layouts.app')

@section('title', 'query view')

@section('content')
    <div class="container">
        <div class="section">
            <div class="row" >

                <div class="col-md-8">
                    <div class="well">
                        <dl class="dl-horizantal">
                            <h3>{{  $query->subject}}</h3>
                            <h6 style="text-align: right">Questioned By:  {{ $query->created_by }} </h6>

                        </dl>
                        <dl class="dl-horizantal">
                            <dt>description:</dt>
                            <dd> {{$query->description}}</dd>


                        </dl>

                        @foreach($reply as $replies)

                            <div class="col-md-offset-2">
                                <div class="well">
                                    <h3>{{  $replies->comment}}</h3>
                                    <h6 style="text-align: right">Replied By: {{ $replies->created_by }}</h6>
                                    <p class="lead" style="text-align: right; -moz-text-size-adjust: @parent"> {{ $replies->created_at}}</p>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="" class="btn btn-primary btn-block">edit</a>
                            </div>

                            <div class="col-sm-6">
                                <a href="" class="btn btn-danger btn-block">Delete</a>

                            </div>

                        </div>
                    </div>


                    <div class="row">


                        {!! Form::open(array('route'=>'reply.store'))!!}
                        {{ Form::label('comment','Your Reply:')}}
                        {{ Form::textarea ('comment',null,array('class'=>'form-control'))}}
                        {{ Form::hidden('created_by',Auth::user()->name )}}
                        {{ Form::hidden('query_id',$query->id )}}
                        {{Form::submit('Reply', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
                        {!! Form::close() !!}




                    </div>
                </div>





            </div>

        </div>
@endsection


