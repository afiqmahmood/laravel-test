@extends('main')

 @section('content')
 
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <a class="btn btn-primary" href="{{ url('add-story') }}">Add Story</a>

  <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($stories as $story)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $story->title }}</td>
            <td>{{ $story->content }}</td>
            <td>
            <form action="{{ route('stories.destroy',$story->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('stories.edit',$story->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </table>
    </div>  
    @endsection

