<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Create Task</title>
</head>
<body>
<h1 class="font-monospace">Create Task</h1>
<form class="row g-3" method="POST" action="{{route('todo.store')}}">
    @csrf
    <div class="col-md-6">
       <label for="Title" class="form-label fs-3">Title</label>
       <input type="text" class="form-control" id="title" name="Title" required>

       <label for="Details" class="form-label fs-3">Details</label>
       <input type="text" class="form-control" id="Details" name="Details" required>
     </div>

     <div class="col-12">
       <button type="submit" class="btn btn-primary">Submit</button>
     </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.>
    
</body>
</html>