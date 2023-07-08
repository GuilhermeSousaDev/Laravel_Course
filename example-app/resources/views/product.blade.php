@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Product Screen ID: {{ $id }}</h1>

@if(isset($search)) 
    {{ $search }}
@endif

@endsection