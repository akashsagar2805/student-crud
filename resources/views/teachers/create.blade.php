<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Teacher</title>
</head>
<body>
  <h1>Create Teacher</h1>
  <form action="{{url('/teachers')}}" method="post">
    @csrf
    <label>Teacher Name:</label>
    <input type="text" placeholder="Enter Name" name="name"> <br><br>
    <label>Teacher Email:</label>
    <input type="email" placeholder="Enter Email" name="email"> <br><br>


    <button type="submit">Save Teacher</button>
  </form>
</body>
</html>
