@extends('welcome')

<style>
    li{
        padding: 0;
        margin: 0;
    }
    
</style>

@section('content')
<a href="{{ route('home') }}">Back</a>

<h2>Our Categories | <a href="{{ route('categories.create') }}">Create one category</a></h2> <br>
<p>Clinck in one and see what we have for you!</p>

@foreach($categories as $category)
    <li>
       <a href="{{ route('categories.products', $category->id) }}">{{ $category->name }}</a>
    </li>
@endforeach

@endsection