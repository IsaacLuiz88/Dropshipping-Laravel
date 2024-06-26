@extends('welcome')

@section('content')

<h2>Customers page, welcome!</h2>

<a href="{{ route('home') }}">Home</a> | <a href="{{ route('customers.create') }}">Create a new customer!</a>
@foreach($customers as $customer)
    <li>
        Name: {{ $customer->name }} | 
        Email: {{ $customer->email}} | 
        Password: {{ $customer->password }} | 
        Adress: {{ $customer->address }}
    </li>
    @endforeach


@endsection