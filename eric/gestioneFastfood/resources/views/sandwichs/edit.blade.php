<x-app-layout>
    <form action="{{route('sandwichs.update',$sandwich->id)}}" method="post">
        @csrf
        @method('PUT')
            Nome:<input type="text" name='sandwich[nome]' value='{{$sandwich->nome}}'><br>
            Origine:<input type="text" name='sandwich[origine]' value='{{$sandwich->origine}}'><br>
            Peso:<input type="text" name='sandwich[peso]' value='{{$sandwich->peso}}'><br>
            Prezzo:<input type='text' name='sandwich[prezzo]' value='{{$sandwich->prezzo}}'><br>
        
            <input type='submit' value='salva' class="btn btn-warning">
            <a href="{{route('sandwichs.index')}}" class="btn btn-info">indietro</a>
            
        
        </form>
</x-app-layout>