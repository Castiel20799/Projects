@extends('layouts.master')

@section('title')
  Create
@endsection

@section('content')

<div class="container col-6 rounded bg-light mt-5 p-3">
  <div class="container bg-grey rounded p-1 mb-3">
    <h3 class="text-center">Creating A Category</h3>
  </div>

  <form action="/categories/store" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Write Name">
      @error('name')
      <p style="color:red">{{ $message }}</p>
      @enderror
    </div>
   
    <a href="/" class="btn btn-secondary">Cancle</a>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

@endsection