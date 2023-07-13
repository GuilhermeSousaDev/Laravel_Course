@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@if(isset($events))
    @foreach($events as $event)
        <p>
            {{ $event->title }} -- 
            {{ $event->city }}
        </p>
    @endforeach
@endif

@endsection