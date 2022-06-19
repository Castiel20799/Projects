@extends('layouts.master')

@section('title')
  Edit
@endsection

@section('content')

  <div class="container col-6 rounded bg-light mt-2 p-3">
    <div class="container bg-grey rounded p-1 mb-3">
      <h3 class="text-center">Editing Post</h3>
    </div>

    <form action="/posts/update/{{$post->id}}" method="POST">
      @csrf
      <div class="mb-3 mt-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}">
        @error('title')
        <p style="color:red">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea type="text" class="form-control" rows="5" name="body" value="{{ $post->body }}"></textarea>
        @error('body')
        <p style="color:red">{{ $message }}</p>
        @enderror
      </div>
      <a href="/posts" class="btn btn-secondary">Cancle</a>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

  @endsection  