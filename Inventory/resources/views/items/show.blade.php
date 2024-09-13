@extends('layout')

@section('content')
    <div class="container">
        <h1>Item Details</h1>
        <p><strong>Name:</strong> {{ $item->name }}</p>
        <p><strong>Quantity:</strong> {{ $item->quantity }}</p>
        <p><strong>Price:</strong> {{ $item->price }}</p>
        <a href="{{ route('items.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
