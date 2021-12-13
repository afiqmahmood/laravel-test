@extends('main')

 @section('content')
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
</div>
@endif
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
    Add New Story
    </div>
    <div class="card-body">
      <form name="add-stories-form" id="add-stories-form" method="post" action="store" >
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="" value="" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Content</label>
          <textarea name="content" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Story</button>

      </form>
    </div>
  </div>
  
</div>  

@endsection