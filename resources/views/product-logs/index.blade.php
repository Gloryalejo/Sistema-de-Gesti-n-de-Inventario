<!-- resources/views/product-logs/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Logs</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Action</th>
                    <th>Details</th>
                    <th>Product Name</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($logs as $log)
    <tr>
        <td>{{ $log->id }}</td>
        <td>{{ ucfirst($log->action) }}</td>
        <td>{{ $log->details }}</td>
        <td>{{ $log->product->name }}</td>
        <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
    </tr>
            @endforeach
            </tbody>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            {{ $logs->links('pagination::bootstrap-4')->with([
                'listClass' => 'pagination justify-content-center', // Clase para centrar las flechas
                'onEachSide' => 1, // Número de páginas a mostrar a cada lado de la página actual
                'style' => 'font-size: 14px; padding: 0.25rem 0.5rem;', // Estilos en línea para las flechas
            ]) }}
        </div>
    </div>
@endsection
