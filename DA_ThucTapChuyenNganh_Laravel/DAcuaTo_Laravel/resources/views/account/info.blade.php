@extends('layouts.app')

@section('content')
<div class="text-center">
        <h3>Account Information</h3>
    <div class="container" style="padding:60px 0">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Account Information</div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
