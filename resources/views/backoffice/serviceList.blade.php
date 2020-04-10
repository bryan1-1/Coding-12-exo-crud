@extends('backoffice.database');

@section('content')

@foreach ($Service as $service)
<p>{{$service->id}}</p>
<p>{{$service->serviceTitle}}</p>
<p>{{$service->sDescription}}</p>

<a class="btn btn-danger" href="/Services/{{$service->id}}/delete">Delete</a>
<a class="btn btn-primary" href="/Services/{{$service->id}}/edit">Edit</a>
<hr>
@endforeach

    

@endsection