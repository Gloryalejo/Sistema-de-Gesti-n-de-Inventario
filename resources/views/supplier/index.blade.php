@extends('layouts.app')

@section('template_title')
    Supplier
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heeader">
                    <h4>Suppliers
                        <a href="{{ url('suppliers/create') }}" class="btn btn-primary float-end">Add Suppliers</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->phone}}</td>
                                <td>
                                    <a href="{{url('/suppliers/'.$item->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                    <a href="{{url('/suppliers/'.$item->id.'/delete')}}" class="btn btn-danger mx-1"
                                    onclick="return confirm('Are you sure you want to delete this supplier?')">Delete</a>
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
