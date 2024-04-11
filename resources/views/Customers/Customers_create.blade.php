@extends('home')

@section('content')

<h2>Add new Customer | <a href=" {{route('customers.index')}} ">Back</a></h2>

<form method="POST" action="{{ route('customers.store') }}">
@csrf

<div>
<label for="name_customers">Name: </label>
<input type="text" name="name_customers" id="name_customers" required>
</div>

<div>
<label for="email_customers">Email: </label>
<input type="text" name="email_customers" id="email_customers" required>
</div>

<div>
<label for="password_customers">Password: </label>
<input type="text" name="password_customers" id="password_customers" required>
</div>

<div>
<label for="address_customers">Address: </label>
<input type="text" name="address_customers" id="address_customers" required>
</div>

<button type="submit">Create new Customer!</button>
</form>
@endsection