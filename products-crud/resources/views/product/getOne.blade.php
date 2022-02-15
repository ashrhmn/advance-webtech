@extends('layouts.app')

@section('content')
    <h1>Product {{ $product->id }}</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ $product->price }}</td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td>{{ $product->quantity }}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{ $product->description }}</td>
        </tr>
    </table>
@endsection
