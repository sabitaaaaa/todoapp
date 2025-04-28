

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
<center>
<h1>records</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">created_at</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($records as $records )
    <tr>
      <th>{{$records->id}}</th>
      <td>{{$records->name}}</td>
      <td>{{$records->email}}</td>
      <td>{{$records->number}}</td>
      <td>{{$records->created_at}}</td>
     <td><a href="edit_record/{{$records->id}}"><button class="btn btn-primary">edit</button></a></td>

     <td><a href="delete_record/{{$records->id}}"><button class="btn btn-danger">delete</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</center>

</body>
</html>