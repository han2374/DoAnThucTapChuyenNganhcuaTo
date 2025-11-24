@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Account Information</h2>
    <p>Name: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
</div>
@endsection
