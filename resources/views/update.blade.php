@extends('welcome')
@section('main')
<form class="m-4 p-4">
    <div class="mb-3 row">
        <div class="col-6">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter your email..">
        </div>
        <div class="col-6">
            <label for="name" class="form-label">User name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Enter your name...">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-6">
            <label for="age" class="form-label">User age</label>
            <input type="number" class="form-control" id="age" aria-describedby="emailHelp" name="age" placeholder="Enter your age..">
        </div>
        <div class="col-6">
            <label for="mobile" class="form-label">Mobile no</label>
            <input type="number" class="form-control" id="mobile" aria-describedby="emailHelp" name="mobile" placeholder="0000000000">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password"  name="password" placeholder="Create new password..">
        </div>
        <div class="col-6">
            <label for="conformpassword" class="form-label">Conform password</label>
            <input type="password" class="form-control" id="conformpassword"  name="conform-password" placeholder="Enter conform password..">
        </div>
    </div>
    <button type="submit" class="btn btn-danger">Update</button>
  </form>
@endsection
