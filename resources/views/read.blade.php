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
        <tr>
            <td>1</td>
            <td>Rishu Aggarwal</td>
            <td>rishuaggarwal@gmail.com</td>
            <td>12345678</td>
            <td>9548411522</td>
            <td>19</td>
            <td><a href="{{route('user')}}"><button class="btn btn-warning">view</button></a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Rishu Aggarwal</td>
            <td>rishuaggarwal@gmail.com</td>
            <td>12345678</td>
            <td>9548411522</td>
            <td>19</td>
            <td><a href=""><button class="btn btn-warning">view</button></a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Rishu Aggarwal</td>
            <td>rishuaggarwal@gmail.com</td>
            <td>12345678</td>
            <td>9548411522</td>
            <td>19</td>
            <td><a href=""><button class="btn btn-warning">view</button></a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Rishu Aggarwal</td>
            <td>rishuaggarwal@gmail.com</td>
            <td>12345678</td>
            <td>9548411522</td>
            <td>19</td>
            <td><a href=""><button class="btn btn-warning">view</button></a></td>
        </tr>
    </table>
@endsection
