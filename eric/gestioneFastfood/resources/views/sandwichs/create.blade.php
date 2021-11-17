<x-app-layout>
    <form action="{{route('sandwichs.store')}}" method="POST">
        @csrf
            Nome:<input type="text" name='sandwich[nome]' value=''><br>
            Origine:<input type="text" name='sandwich[origine]' value=''><br>
            Peso:<input type="text" name='sandwich[peso]' value=''><br>
            Prezzo:<input type='text' name='sandwich[prezzo]' value=''><br>
        
            <input type='submit' value='salva' class="btn btn-warning">
            <a href="{{route('sandwichs.index')}}" class="btn btn-info">indietro</a>
        </form>
</x-app-layout>
