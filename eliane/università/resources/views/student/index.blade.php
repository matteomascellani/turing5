<head>
    <style>
       body{
           background-color: rgb(74, 124, 107)
       }
       th{
           color: rgb(2, 36, 25)
       }
    </style>
</head>
<body>
    <table style="width: 128%">
     <tr>
        <th>NOME</th>
        <th>COGNOME</th>
        <th>ANNO NASCITA</th>
        <th>CITTA RESIDENZA</th>
        <th>INDIRIZZO</th>
        <th>CAP</th>
        <th>PAESE</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        <th>CORSO FREQUENTATO</th>

     </tr>
     @foreach ($items as $item)
     <tr>
        <td>{{$item->nome}}</td>
        <td>{{$item->cognome}}</td>
        <td>{{$item->anno_nascita}}</td>
        <td>{{$item->citta_residenza}}</td>
        <td>{{$item->indirizzo}}</td>
        <td>{{$item->cap}}</td>
        <td>{{$item->paese}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->telefono}}</td>
        <td>{{$item->corso_frequentato}}</td>

    </tr>
     @endforeach


    </table>




</body>
