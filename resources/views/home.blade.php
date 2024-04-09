@extends('welcome')

@section('content')

<h2>Hello</h2>

<a href="{{ route('categories.index') }}">Categories</a><br>| 
<a href="{{ route('products.index') }}">Products</a><br>| 
<a href="{{ route('costumers.index') }}">Costumers</a><br>| 
<a href="{{ route('suppliers.index')}}">Suppliers</a>
@endsection