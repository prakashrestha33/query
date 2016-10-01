@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as Admin!
                </div>

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

</table>
</div>
            </div>
        </div>
    </div>
</div>
@endsection


