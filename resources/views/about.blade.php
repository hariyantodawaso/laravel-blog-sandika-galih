@extends('layouts.main')

@section('container')
    <h2>Halaman About</h2>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="My Foto" width="100" height="100" class="rounded-circle">
@endsection
