@extends('layouts.home')

@section('content')
    <h1>Contact</h1>
    @foreach ($contacts as $contact)
        <div class="p-3">
            {{ $contact->name }}
            <br>
            {{ $contact->role }}
            <br>
            {{ $contact->email }}
        </div>
    @endforeach
@endsection
