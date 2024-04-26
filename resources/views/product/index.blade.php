@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products
                        <a href="{{ url('products/create') }}" class="btn btn-primary float-end">Add Products</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Base Price</th>
                                <th>Base Cost</th>
                                <th>Category</th>
                                <th>Suppliers</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->base_price}}</td>
                                <td>{{$item->base_cost}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{\App\Models\Supplier::whereIn('id', $item->suppliers->pluck("supplier_id"))->get()->pluck("name")  }}</td>
                                <td>
                                    <a href="{{url('/products/'.$item->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                    <a href="{{url('/products/'.$item->id.'/delete')}}" class="btn btn-danger mx-1"
                                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
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
