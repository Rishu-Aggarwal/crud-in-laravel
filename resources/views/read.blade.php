@extends('welcome')
@section('main')
<div class="table-div">
    <table class="table table-danger">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile No</th>
            <th>Age</th>
            <th>Actions</th>
        </thead>
        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->password}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->age}}</td>
            <td><a href="{{route('user')}}"><button class="btn btn-warning">view</button></a></td>
        </tr>
        @endforeach
    </table>
    {{$students->links()}}
@endsection
