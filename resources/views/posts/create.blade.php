@extends('layouts.master')

@section('title')
  Create
@endsection

@section('content')

<div class="container col-6 rounded bg-light mt-2 p-3">
  <div class="container bg-grey rounded p-1 mb-3">
    <h3 class="text-center">Creating A Post</h3>
  </div>

  <form action="/posts/store" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" value="{{ old('title')}}" placeholder="Write title">
      @error('title')
      <p style="color:red">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">body</label>
      <textarea type="text" class="form-control" rows="5" name="body" value="{{ old('body')}}" placeholder="Write the body"></textarea>
      @error('body')
      <p style="color:red">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
                  <select class="form-select select optional" multiple name="categories[]" multiple>
                    <option value="" selected disabled>Choose Option</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                    @endforeach
                  </select>
                 
    </div>
    <a href="/" class="btn btn-secondary">Cancle</a>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

@endsection