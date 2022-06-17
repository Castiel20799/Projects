<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Show Category</title>

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

    <!-- Nav Code -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container justify-content-center">
            <a href="/" class="navbar-brand fw-bold" href="/posts">Home</a>
        </div>
    </nav>
    <!-- End Nav Code -->

    <div class="container col-6 rounded bg-light mt-5 p-3">
        <div class="container bg-grey rounded p-1 mb-3">
            <h3 class="text-center">Show Category</h3>
        </div>

        <div>
            <h5>{{$category->name}}</h5><br>
            <p>{{$category->description}}</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>