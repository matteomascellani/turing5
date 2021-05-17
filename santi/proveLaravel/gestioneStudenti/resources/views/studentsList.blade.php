

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>
            <th>{{ $student->cne }}</th></th>
            <td>{{ $student->firstNamr }}</td>
            <td>{{ $student->secondName }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->Speciality }}</td>
            <td>
                <a href="#" class="btn btn-sm btn-warning">Show</a>
                <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-warning">Delete</a>
            </td>
        </tr>
        </tbody>
    </table>


