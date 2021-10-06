<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <head>
        <title>Homepage Biblioteca BIGIAVI</title>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        Header
                    </div>
                    <div class="card-body">
                        <form action="{{route('subscribers.store')}}" method="post" id="create">
                            @csrf

                            <div class="form-group">
                              <label for="nome">Nome</label>
                              <input type="text" name="subscriber[nome]" id="" class="form-control" placeholder="ly" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="cognome">Cognome</label>
                                <input type="text" name="subscriber[cognome]" id="" class="form-control" placeholder="paul" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="indirizzo">Indirizzo</label>
                                <input type="text" name="subscriber[indirizzo]" id="" class="form-control" placeholder="indirizzo" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="cap">Cap</label>
                                <input type="text" name="subscriber[cap]" id="" class="form-control" placeholder="cap" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="subscriber[city]" id="" class="form-control" placeholder="city" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="subscriber[country]" id="" class="form-control" placeholder="country" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="subscriber[phone]" id="" class="form-control"  pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" placeholder="1234-567-345" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="subscriber[email]" id="" class="form-control" placeholder="ly@example.com" aria-describedby="helpId">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" form="create" class="btn btn-success">Salva</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
