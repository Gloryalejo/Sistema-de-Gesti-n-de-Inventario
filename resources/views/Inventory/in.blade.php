@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1 class="text-center">Registrar Entrada de Inventario</h1>

        <form method="POST" action="{{ url('inventory/in') }}">
            @csrf

            <div class="form-group">
                @foreach ($products as $product)
                    <input type="checkbox" id="{{ "producto-" . $product->id }}" name="{{ "producto-" . $product->id }}" value="{{ $product->id }}" class="form-control">
                    <label for="{{ "producto" . $product->id }}">{{ $product->id . " -- " . $product->name . " -- " . $product->description }}</label>
                    <input style="float: right; clear: both;" type="number" id="{{ "producto-qty-" . $product->id }}" name="{{ "producto-qty-" . $product->id }}" maxlength="5" size="5" placeholder="0">
                @endforeach
            </div>

            {{-- <div class="form-group">
                <label for="product_id">Product ID:</label>
                <input type="number" name="product_id" id="product_id" class="form-control">
            </div>

            <div class="form-group">
                <label for="quantity">Cantidad:</label>
                <input type="number" name="quantity" id="quantity" class="form-control">
            </div> --}}

            <div class="form-group">
                <label for="movement_date">Fecha:</label>
                <input type="date" name="movement_date" id="movement_date" class="form-control" value="{{ date('Y-m-d') }}">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Registrar Entrada</button>
                <a href="{{ url('inventory') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </form>
    </div>
@endsection

