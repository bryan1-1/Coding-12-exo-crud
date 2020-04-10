@extends('backoffice.database');

@section('content')

@foreach ($Team as $team)
<img src="{{$team->img}}" alt="">
<p>{{$team->id}}</p>
<p>{{$team->name}}</p>


<a class="btn btn-danger" href="/Teams/{{$team->id}}/delete">Delete</a>
<a class="btn btn-primary" href="/Teams/{{$team->id}}/edit">Edit</a>
<hr>
@endforeach

    

@endsection