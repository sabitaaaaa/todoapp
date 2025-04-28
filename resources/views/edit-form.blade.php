<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <h1>edit data</h1>
    <form action="{{url('update_data', $result->id)}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter the name" value="{{$result->name}}"><br><br>

        <input type="text" name="email" placeholder="enter the email" value="{{$result->email}}"><br><br>

        <input type="number" name="number" placeholder="enter the phone number" value="{{$result->number}}"><br><br>
        <button>update</button>
    </form>

</body>

</html>