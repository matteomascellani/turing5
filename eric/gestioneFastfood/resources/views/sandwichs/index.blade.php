<x-app-layout>
  <body>
        
    <table class="table table stripped table-hover table-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Origine</th>
        <th>peso</th>
        <th>prezzo</th>
      </tr>
      @foreach ($items as $item)
      <tr>
        <td><a href="{{route('sandwichs.edit',$item->id)}}"> {{$item->id}} </a>    </td>
        <td>{{$item->nome}} </td>
        <td>{{$item->origine}}</td>
        <td><a href="{{route('sandwichs.edit',$item->id)}}">      {{$item->peso}}      </a>  </td>
        <td>{{$item->prezzo}}</td>
        <td>
          <a href="{{route('sandwichs.edit',$item->id)}}" class="btn btn-primary">modifier</a>

          
         
        </td>
        <td>

          <form action="{{route('sandwichs.destroy',$item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
          </form>
        </td>
      </tr>
      @endforeach
     
      <tr>
      

    </table>

    <a href="{{route('sandwichs.create')}}" class="btn btn-success">create2</a>
    
</body>
</x-app-layout>

