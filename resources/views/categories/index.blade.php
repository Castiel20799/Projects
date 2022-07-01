@extends('layouts.master')

@section('title')
  Home
@endsection

@section('content')

  <div class="container col-6 rounded bg-light mt-5 p-3">

    <div class="container bg-grey rounded p-1 mb-3">
      <h3 class="text-center">Categories</h3>
      <a href="/categories/create" class="btn btn-primary">Create</a><br>
    </div>    

    <div class="container bg-grey rounded p-5">
    @foreach($categories as $category)
    <div class="d-flex">
      <h5>{{ $category->name }}</h5>

      <a href="/categories/edit/{{ $category->id }}" class="btn btn-sm btn-success ms-2">Edit</a>
      <form action="/categories/delete/{{$category->id}}" method="POST" onclick="return confirm('Deleting this post! Are you sure?')">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger ms-3">Delete</button>
      </form>
    </div>
    <p>{{$category->description}}</p>
    <hr>
    @endforeach
    </div>    
   
  </div>

  @endsection