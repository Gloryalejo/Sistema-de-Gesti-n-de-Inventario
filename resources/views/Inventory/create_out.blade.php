@extends('layouts.app')

@section('content')
    <h1>Registrar Salida de Inventario</h1>

    <form method="POST" action="{{ route('inventory.storeOut') }}">
        @csrf

        <div class="form-group">
            <label for="product_id">Producto:</label>
            <select name="product_id" id="product_id" class="form-control">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Cantidad:</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
        </div>

        <div class="form-group">
            <label for="movement_date">Fecha:</label>
            <input type="date" name="movement_date" id="movement_date" class="form-control" value="{{ date('Y-m-d') }}">
        </div>

        <!-- Agrega más campos según sea necesario -->

        <button type="submit" class="btn btn-primary">Registrar Salida</button>
    </form>
@endsection