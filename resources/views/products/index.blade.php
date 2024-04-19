

<x-app-web-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route ('products.create') }}" class="btn btn-primary">Create</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> NAME </th>
                            <th> DESCRIPTION </th>
                            <th> BASE_PRICE</th>
                            <th> BASE_COST</th>
                            <th> CATEGORY</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr> 
                            <td> {{  $product->id }} </td>
                            <td> {{  $product->name }} </td>
                            <td> {{  $product->description }} </td>
                            <td> {{  $product->base_price }} </td>
                            <td> {{  $product->base_cost }} </td>
                            <td> {{  $product->category_id }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-web-layout>


