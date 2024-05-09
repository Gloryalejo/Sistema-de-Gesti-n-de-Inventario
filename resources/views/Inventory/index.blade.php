@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inventario</h1>
        <h4>
            <a href="{{ url('inventory/out') }}" class="btn btn-primary float-end">Añadir Salida</a>
            <a href="{{ url('inventory/in') }}" class="btn btn-primary float-end">Añadir Entrada</a>
        </h4>

        @if (count($inventoryRecords) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product ID</th>
                        <th>Producto</th>
                        <th>Cantidad Anterior</th>
                        <th>Cantidad Actual</th>
                        <th>Cantidad del Movimiento</th>
                        <th>Tipo de Movimiento</th>
                        <th>Fecha del Movimiento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventoryRecords as $record)
                        <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->product_id }}</td>
                            <td>{{ $record->product ? $record->product->name : ($record->product_id ? 'Producto eliminado' : 'N/A') }}</td>   
                            <td>{{ $record->previousQuantity() }}</td>                      
                            <td>{{ $record->currentQuantity() }}</td>
                            <td>{{ $record->signedQuantity() }}</td>
                            <td>{{ $record->product ? $record->movement_type : 'Salida' }}</td>
                            <td>{{ $record->movement_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $inventoryRecords->links() }}
        @else
            <p>No hay registros de inventario.</p>
        @endif
    </div>
@endsection
