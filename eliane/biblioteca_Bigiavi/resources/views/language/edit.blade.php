<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica lingua') }}
        </h2>
    </x-slot>

    <head>
        <style>
            button {
                background-color: rgb(56, 115, 245);
                border-radius: 6%;
                padding: 1%;
                color: white;
            }

        </style>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12">
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('languages.update', $language->id) }}" method="post" id="add">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="titolo">Modifica lingua</label>
                                        <input type="text" name="language[name]" class="form-control"
                                            value="{{ $language->name }}" />
                                    </div> <br><br>
                                    <div>
                                        <button type="submit" class="btn btn-primary" form="add">
                                            salva modifiche
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
