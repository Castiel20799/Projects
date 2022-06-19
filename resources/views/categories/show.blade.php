@extends('layouts.master')

@section('title')
  Show
@endsection

@section('content')

<div class="container col-6 rounded bg-light mt-5 p-3">
    <div class="container bg-grey rounded p-1 mb-3">
        <h3 class="text-center">Show Category</h3>
    </div>

    <div>
        <h5>{{$category->name}}</h5><br>
        <p>{{$category->description}}</p>
    </div>

</div>

@endsection