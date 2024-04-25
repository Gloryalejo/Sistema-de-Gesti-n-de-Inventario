@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users
                        <a href="{{ url('users/create') }}" class="btn btn-primary float-end">Add Users</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Role ID</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->last_name}}</td>
                                <td>{{$item->role_id}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    <a href="{{url('/users/'.$item->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                    <a href="{{url('/users/'.$item->id.'/delete')}}" class="btn btn-danger mx-1"
                                    onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
