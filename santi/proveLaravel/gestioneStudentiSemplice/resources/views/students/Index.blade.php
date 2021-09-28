@extends('students.layout')

@section('content')
<div class="pull-left">
    <h2>Student Crud</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
        </div>
    </div>
</div>

@if($message=Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Course</th>
        <th>Prof</th>
    </tr>

    @foreach($students as $student)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->studentname }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->prof }}</td>
        <td>
            <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('student.show', $student->id) }}">show</a>
                <a class="btn btn-primary" href="{{ route('student.edit', $student->id) }}">edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
