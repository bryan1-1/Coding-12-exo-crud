@extends('backoffice.database');

@section('content')

@foreach ($Intro as $intro)
<img src="{{$intro->img_path}}" alt="">
<a class="btn btn-danger" href="/Intros/{{$intro->id}}/delete">Delete</a>
<a class="btn btn-primary" href="/Intros/{{$intro->id}}/edit">Edit</a>

@endforeach

    

@endsection