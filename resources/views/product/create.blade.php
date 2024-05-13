@extends('layouts.app')

@section('template_title')
    Add Product
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Product
                        <a href="{{ url('products') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('products/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" onchange="previewImage(event)">
                            <br>
                            <img id="imagePreview" src="" alt="Image Preview" width="150" style="display: none; margin-left: 10px;">
                        </div>

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" value="{{ old('description') }}">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Base Price</label>
                            <input type="number" name="base_price" value="{{ old('base_price') }}">
                            @error('base_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Base Cost</label>
                            <input type="number" name="base_cost" value="{{ old('base_cost') }}">
                            @error('base_cost')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Category</label>
                            <select name="category_id">
                                @foreach($categories as $id => $name)
                                    <option value="{{ $id }}" @if(old('category_id') == $id) selected @endif>{{ $name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Supplier IDs</label>
                            <input type="text" name="supplier_id" value="{{ old('supplier_id') }}">
                            @error('supplier_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
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
