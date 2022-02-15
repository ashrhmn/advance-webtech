@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form class="flex flex-col" action="{{ route('submitCreateProduct') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <input type="number" name="price" value="{{ old('price') }}" placeholder="Price">
        @error('price')
            <span>{{ $message }}</span>
        @enderror
        <input type="number" name="quantity" value="{{ old('quantity') }}" placeholder="Quantity">
        @error('quantity')
            <span>{{ $message }}</span>
        @enderror
        <input type="text" name="description" value="{{ old('description') }}" placeholder="Description">
        <input type="submit" value="Submit">
    </form>
@endsection
