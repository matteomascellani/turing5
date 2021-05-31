

<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12">
                <h3><strong>Detaglio</strong></h3><br>
               <strong>Categoria:</strong> {{$category->nome}} <br>

            </div>
        </div>
    </div>
</x-app-layout>
