@extends('layout')

@section('content')

        @unless (empty($people))
            {{ "there are people" }}
        @else
            {{ "No people" }}
        @endunless

        @foreach ($people as $person)
              <li> {{ $person }} </li>
            @endforeach
        <h1>The About page goes here</h1>
@stop
