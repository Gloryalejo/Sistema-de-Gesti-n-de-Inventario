@extends('layouts.app')

@section('template_title')
    Edit Product
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Edit Product
                        <a href="{{ url('products') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/products/'.$products->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" onchange="previewImage(event)">
                            <br>
                            <img id="imagePreview" src="" alt="Image Preview" width="150" style="display: none; margin-left: 40px;">
                        </div>

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $products->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" value="{{ $products->description }}">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Base Price</label>
                            <input type="number" name="base_price" value="{{ $products->base_price }}">
                            @error('base_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Base Cost</label>
                            <input type="number" name="base_cost" value="{{ $products->base_cost }}">
                            @error('base_cost')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Category ID</label>
                            <input type="number" name="category_id" value="{{ $products->category_id }}">
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Supplier IDs</label>
                            <input type="text" name="supplier_id" value="{{ $products->supplier_id }}">
                            @error('supplier_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const imagePreview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            imagePreview.src = '';
            imagePreview.style.display = 'none';
        }
    }
</script>

@endsection
