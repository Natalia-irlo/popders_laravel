@extends('template')

@section('content')

<form method="POST" action="/register" class="container aling-center p-5">
    @csrf
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Full name</label>
      <input type="text" class="form-control" id="exampleInputText" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Avatar</label>
        <input type="file" class="form-control" id="exampleInputAvatar" name="avatar">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection