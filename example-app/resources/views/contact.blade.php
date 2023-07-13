@extends('layouts.main')

@section('title', 'Contacts')

@section('content')

@if(isset($id))
    <h1>Contact Page - {{ $id }}</h1>
@endif

<a href="/">Go back to Home</a>

@endsection