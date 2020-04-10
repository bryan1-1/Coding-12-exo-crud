@extends('backoffice.database');

@section('content')

@foreach ($Testimonial as $testimonial)
<div>
<img src="{{$testimonial->img}}" alt="">
<p>{{$testimonial->name}}</p>
<p>{{$testimonial->factoryName}}</p>
<p>{{$testimonial->text}}</p>

<a class="btn btn-danger" href="/Testimonials/{{$testimonial->id}}/delete">Delete</a>
<a class="btn btn-primary" href="/Testimonials/{{$testimonial->id}}/edit">Edit</a>
<hr>
</div>

@endforeach

    

@endsection