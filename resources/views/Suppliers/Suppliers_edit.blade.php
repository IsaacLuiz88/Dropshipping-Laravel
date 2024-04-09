@extends('welcome')

@section('content')

<h2>Edit supplier</h2>

<a href="{{ route('suppliers.show', $supplier->id) }}">Back</a>
<form method="POST" action="{{ route('suppliers.update', $supplier->id) }}">
@csrf
@method('PUT')

<div>
    <label for="name">Name Company:</label>
    <input type="text" name="name" id="name" value="{{ $supplier->name }}" required>
</div>

<div>
    <label for="contact_name">Contact Name:</label>
    <input type="text" name="contact_name" value="{{ $supplier->contact_name }}" required>
</div>

<div>
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $supplier->email }}" required>
</div>

<div>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="{{ $supplier->phone }}" required>
</div>

<button type="submit">Save Changes</button>

</form>

@endsection