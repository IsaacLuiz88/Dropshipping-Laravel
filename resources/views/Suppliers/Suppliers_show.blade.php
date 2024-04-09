@extends('welcome')

@section('content')

<div>
    <h2>Supplier Details</h2>
    <a href="{{ route('suppliers.edit', $supplier->id) }}">&#9998;</a> | <a href="{{ route('suppliers.index') }}">&#127969;</a> | <form method="POST" action="{{ route('suppliers.destroy', $supplier->id) }}">
    @csrf
    @method('DELETE')
        <button type="submit">&#128686;</button>
    </form>
    <p><strong>ID:</strong> {{ $supplier->id }}</p>
    <p><strong>Name:</strong> {{ $supplier->name }}</p>
    <p><strong>Contact Name:</strong> {{ $supplier->contact_name }}</p>
    <p><strong>Email:</strong> {{ $supplier->email }}</p>
    <p><strong>Phone:</strong> {{ $supplier->phone }}</p>
    <p><strong>Created At:</strong> {{ $supplier->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $supplier->updated_at }}</p>
</div>

@endsection
