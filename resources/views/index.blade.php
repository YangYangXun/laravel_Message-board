@extends('layout.home')

@section('content')

    @foreach($messageObj as $obj)

        <div class="card mt-10">
            <div class="card-header d-flex w-100 justify-content-between">
                <h4>{{$obj->name}}</h4>
                <small> {{$obj->created_time}}</small>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$obj->title}}</h5>
                <p class="card-text">{{$obj->content}}</p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>

    @endforeach

@endsection