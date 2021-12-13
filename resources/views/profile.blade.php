@extends('main')

 @section('content')
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
</div>
@endif

<div class="card">
    <div class="card-header text-center font-weight-bold">
    Profile </div>
        <div class="card-body">
            <form name="Profile-form" id=Register-form method="post" action="profile">
            @csrf
            <div class="form-group">
            <label for="exampleInputName1">ID</label>
          <input type="text" id="id" name="id" class="form-control" required="" value="{{ $user->id }}" >
          
          <label for="exampleInputName1">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="" value="{{ $user->name }}" >
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" id="email" name="email" class="form-control" required="" value="{{ $user->email }}" >
        </div>
        <div class="form-group">
          <label for="InputAddress">Address</label>
          <textarea  id="address" name="address" class="form-control" required="" >{{ $user->address }}</textarea>

          <label for="InputPhone">Phone No</label>
          <input type="text" id="phone" name="phone" class="form-control" required="" value="{{ $user->phone }}" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" class="form-control" name="password" value="{{ $user->password }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>

            </form>
@endsection

