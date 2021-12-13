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
    Add New Story    {{ $story->id }}
    </div>
 
    <div class="card-body">
      <form method="POST" action="{{ route('stories.update', $story->id) }}" >
      @csrf
      @method('PATCH')
        <div class="form-group">
          <label for="exmpleTitle">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="" value="{{ $story->title }}" >
        </div>
        <div class="form-group">
          <label for="exmplecontent">content</label>
          <textarea name="content" class="form-control" >{{ $story->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>
</div>  
@endsection