@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h2>Hello   {{ Auth::user()->name }}  <br> Welcome </h2>


                </div>

                <div class="panel-body">
                    You are logged in!<br>



                 you can ask queries and also reply to the specific question
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
