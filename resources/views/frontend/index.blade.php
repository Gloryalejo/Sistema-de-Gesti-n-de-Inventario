<x-app-web-layout>

    // nombre de la ventana visualmente
    <x-slot:title>
        Home
    </x-slot>

   <div class="py-5">
        <div class="container">
            <h4>welcome</h4>
        </div>
    </div>


    <x-slot:scripts>
        <script>
            alert("script");
        </script>
    </x-slot>

</x-app-web-layout>    