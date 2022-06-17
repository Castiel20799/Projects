<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Category</title>

  <style>
    .bg-grey {
      background-color: #e5e5ff;
    }

    .bg-main {
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
      <h3 class="text-center">Editing Category</h3>
    </div>

    <form action="/categories/update/{{$category->id}}" method="POST">
      @csrf
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}">
        @error('name')
        <p style="color:red">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" class="form-control" rows="5" name="description" value="{{ $category->description }}"></textarea>
        @error('description')
        <p style="color:red">{{ $message }}</p>
        @enderror
      </div>
      <a href="/" class="btn btn-secondary">Cancle</a>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>