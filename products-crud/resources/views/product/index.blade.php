@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <table>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('getOneProduct', ['id' => encrypt($product->id)]) }}">Details</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
