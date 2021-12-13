@extends('main')

 @section('content')
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
</div>
@endif

<div class="card">
    <div class="card-header text-center font-weight-bold">
        Login </div>
        <div class="card-body">
            <form name="login-form" id=login-form method="post" action="login">
            @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" id="email" name="email" class="form-control" required="" value="" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>

            </form>
@endsection