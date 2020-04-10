@extends('backoffice.database');

@section('content')

@foreach ($Portfolio as $portfolio)
<img src="{{$portfolio->img_path}}" alt="">
<a class="btn btn-danger" href="/Portfolios/{{$portfolio->id}}/delete">Delete</a>
<a class="btn btn-primary" href="/Portfolios/{{$portfolio->id}}/edit">Edit</a>

@endforeach

    

@endsection