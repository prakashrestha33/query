@extends('layouts.app')

@section('title', 'reply')

@section('content')
    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col-md-10">
                    <h1>All replies for Query id </h1>

                </div>

            </div>


            <!-- <div class="row"> -->

            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th>ids</th>
                    <th>comment</th>
                    <th>Replied By</th>
                    <th>Replied At</th>
                    <th>updated At</th>
                    <th>remarks</th>
                    </thead>

                    <tbody>

                    @foreach ($reply as $replies)

                        <tr>
                            <th> {{ $replies->id }}</th>

                            <td>{{ substr($replies->comment,0,100) }} {{strlen($replies->comment)>100 ? "....." : ""}} </td>
                            <td>{{ $replies->created_by  }} </td>
                            <td>{{ $replies->created_at  }} </td>
                            <td>{{ $replies->updated_at }} </td>
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