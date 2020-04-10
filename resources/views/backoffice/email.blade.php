@extends('backoffice.database');

@section('content')

@foreach ($Contact as $contact)
<div class="bg-secondary my-3">
<h2>{{$contact->name}}</h2>
<hr>
<h5>{{$contact->email}}</h5>
<hr>
<p>{{$contact->subject}}</p>
<hr>
<p>{{$contact->message}}</p>
</div>
<a class="btn btn-danger" href="/Emails/{{$contact->id}}/delete">Delete</a>


@endforeach

    

@endsection