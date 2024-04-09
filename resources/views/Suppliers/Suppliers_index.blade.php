@extends('welcome')

@section('content')

<h2>Our Suplliers! | <a href="{{ route('suppliers.create') }}">Add new supplier</a> | <a href="{{ route('home') }}">Back to home</a></h2>

@foreach($suppliers as $supplier)
    <li>
    Company:      {{ $supplier->name }} | 
    Contact name: {{ $supplier->contact_name }} | 
    Email:        {{ $supplier->email }} | 
    Phone:        {{ $supplier->phone }} | 
    <a href="{{ route('suppliers.show', $supplier->id) }}">&#128065;</a>
    </li>
@endforeach
@endsection