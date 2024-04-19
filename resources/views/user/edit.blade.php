@extends('layouts.app')

@section('template_title')
    Edit User
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
                    <h4>Edit User
                        <a href="{{ url('users') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/users/'.$users->id.'/edit') }}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $users->name }}">
                        @error('name')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="{{ $users->last_name }}">

                        @error('last_name')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Role ID</label>
                        <input type="number" name="role_id" value="{{ $users->role_id }}">
                        @error('role_id')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>E-mail</label>
                        <input type="email" name="email" value="{{ $users->email }}">
                        @error('email')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" value="{{ $users->password }}">
                        @error('password')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
