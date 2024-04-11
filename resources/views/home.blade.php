@extends('welcome')

@section('content')

<h2>Hello</h2>

<div id="home_categories">
    <a href="{{ route('categories.index') }}">Categories</a>| 
</div>
<div>
    <a href="{{ route('products.index') }}">Products</a>| 
</div>
<div>
    <a href="{{ route('customers.index') }}">Costumers</a>| 
</div>
<div>
    <a href="{{ route('suppliers.index')}}">Suppliers</a>
</div>
@endsection