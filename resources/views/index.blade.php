<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Home</title>

  <style>
    .bg-grey{
      background-color: #e5e5ff;
    }
    .bg-main{
      background-color: #eeeeff;
    }
  </style>
</head>

<body class="bg-main">

  <!-- Example Code -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container justify-content-center">
      <a href="/" class="navbar-brand fw-bold" href="/posts">Home</a>
    </div>
  </nav>
  <!-- End Nav Code -->

  <div class="container col-6 rounded bg-light mt-5 p-3">

    <div class="container bg-grey rounded p-1 mb-3">
      <h3 class="text-center">Categories</h3>
      <a href="/categories/create" class="btn btn-primary">Create</a><br>
    </div>    

    <div class="container bg-grey rounded p-5">
    @foreach($categories as $category)
    <div class="d-flex">
      <h5><a href="/categories/show/{{$category->id}}">{{ $category->name }}</a></h5>

      <a href="/categories/edit/{{ $category->id }}" class="btn btn-sm btn-secondary ms-2">Edit</a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>