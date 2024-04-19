@extends('layouts.app')

@section('template_title')
    Add Supplier
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
                    <h4>Add Supplier
                        <a href="{{ url('suppliers') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/suppliers') }}" method="POST">
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
                        <label>Address</label>
                        <input type="text" name="address" value="{{ old('address') }}">

                        @error('address')
                        <span class="text-danger">
                                    {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="number" name="phone" value="{{ old('phone') }}">
                        @error('phone')
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
