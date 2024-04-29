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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                @if (!$product->trashed())
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->base_price }}</td>
                                        <td>{{ $product->base_cost }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            {{ \App\Models\Supplier::whereIn('id', $product->suppliers->pluck("supplier_id"))->get()->pluck("name")->implode(', ') }}
                                        </td>
                                        <td>
                                            <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ url('/products/'.$product->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
