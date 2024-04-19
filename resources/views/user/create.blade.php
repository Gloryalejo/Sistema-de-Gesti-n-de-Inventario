@extends('layouts.app')

@section('template_title')
    Add User
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                    <div class="alert alert-success">
                        {{(session('status'))}}
                    </div>
            @endif


            <div class="card">
                <div class="card-heeader">
                    <h4>Add User
                        <a href="{{ url('users') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/users') }}" method="POST">
                        @csrf

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}">
                        @error('name')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}">

                        @error('last_name')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Role ID</label>
                        <input type="number" name="role_id" value="{{ old('role_id') }}">
                        @error('role_id')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>E-mail</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
