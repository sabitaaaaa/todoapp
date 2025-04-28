<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>add new students</h1>
    <form action="add" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter the name"><br><br>

        <input type="text" name="email" placeholder="enter the email"><br><br>
        
        <input type="number" name="number" placeholder="enter the phone number"><br><br>
        <button >add student</button>
    </form>
    
</body>
</html>