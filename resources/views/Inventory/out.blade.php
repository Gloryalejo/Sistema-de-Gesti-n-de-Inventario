@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h1 class="text-center">Registrar Salida de Inventario</h1>

    <form method="POST" action="{{ url('inventory/out') }}">
        @csrf

        <div class="form-group">
            <label for="product_id">Product ID:</label>
            <input type="number" name="product_id" id="product_id" class="form-control">

        </div>

        <div class="form-group">
            <label for="quantity">Cantidad:</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
        </div>

        <div class="form-group">
            <label for="movement_date">Fecha:</label>
            <input type="date" name="movement_date" id="movement_date" class="form-control" value="{{ date('Y-m-d') }}">
        </div>

        <div class="text-center">
        <button type="submit" class="btn btn-primary">Registrar Salida</button>
        </div>
    </form>
</div>
@endsection
