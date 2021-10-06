<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica country') }}
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

                                <form action="{{ route('countries.update', $country->id) }}" method="post" id="add">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="titolo">Modifica code</label>
                                        <input type="text" name="country[code]" class="form-control"
                                            value="{{ $country->code }}" />
                                    </div> <br><br>
                                    <div class="form-group">
                                        <label for="titolo">Modifica country</label>
                                        <input type="text" name="country[state]" class="form-control"
                                            value="{{ $country->state }}" />
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
