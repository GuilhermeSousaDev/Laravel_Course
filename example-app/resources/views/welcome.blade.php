@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Hello</h1>

@for($i=0;$i<count($arr);$i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 1)
        <p>{{ $arr[$i] * 5 }}</p>
    @endif
@endfor

<p>Foreach ------------</p>         

@foreach($names as $name)
    <p>{{ $name }} - {{ $loop->index }}</p>         
@endforeach 
       
    <p>PHP Directive ------------</p>  

@php
    $name = "Ze";
    echo $name;
@endphp      

@endsection