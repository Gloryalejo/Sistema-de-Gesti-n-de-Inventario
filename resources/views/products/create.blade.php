{{-- 

<x-app-web-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route ('products.create') }}" class="btn btn-primary">Create</a>
                </div>

                <form method = "POST" action="{{ route ('products.store') }}">
                    @csrf
                
                    <label> Name </label>
                    <input name="name">

                    <label> Description </label>
                    <input name="description">

                    <label> Base Price </label>
                    <input name="base_price">

                    <label> Base Cost </label>
                    <input name="base_cost">

                    <label> Category </label>
                    <input name="category">

                    <button type ="submit">Save</button>
                    <a href=" {{route('products.index')}}">Cancel</a>
                </form>
                
            </div>
        </div>
    </div>
</x-app-web-layout> --}}

<x-app-web-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex justify-center">
            <div class="max-w-md">
                <div class="bg-white shadow-md rounded-md">
                    <div class="p-6">
                        <a href="{{ route ('products.create') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Create</a>
                    </div>

                    <form method="POST" action="{{ route ('products.store') }}" class="p-6">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block mb-2 font-semibold text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block mb-2 font-semibold text-gray-700">Description</label>
                            <input type="text" name="description" id="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="base_price" class="block mb-2 font-semibold text-gray-700">Base Price</label>
                            <input type="text" name="base_price" id="base_price" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="base_cost" class="block mb-2 font-semibold text-gray-700">Base Cost</label>
                            <input type="text" name="base_cost" id="base_cost" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="category" class="block mb-2 font-semibold text-gray-700">Category</label>
                            <input type="text" name="category" id="category" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="flex items-center">
                            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Save</button>
                            <a href="{{ route('products.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>


