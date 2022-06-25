@extends('layouts.master')

@section('title')
  Show
@endsection

@section('content')

<div class="container col-6 rounded bg-light mt-2 p-3">
    <div class="container bg-grey rounded p-1 mb-3">
        <h3 class="text-center">Post Detail</h3>
    </div>

    <div>
        <h5>{{$post->title}}</h5><br>
        <p class="text-muted"><i>{{$post->updated_at->diffForHumans()}}</i> by <b> {{$post->name}}</b></p><br>
        <p>{{$post->body}}</p>
      
    </div>

</div>

@endsection