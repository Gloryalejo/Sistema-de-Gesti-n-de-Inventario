

<!-- index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5">
            <div class="container">
                <h4>Welcome</h4>
                <p>Choose an action:</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ route('login') }}" class="btn btn-primary me-md-2" role="button">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary" role="button">Register</a>
                </div>
            </div>
        </div>
    </div>
@endsection