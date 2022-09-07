<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Teacher</title>
</head>
<body>
  <h1>Edit Teacher</h1>
  <form action="{{url('/teachers/' . $teacher->id)}}" method="post">
    @method('put')
    @csrf
    <label>Teacher Name:</label>
    <input type="text" placeholder="Enter Name" name="name" value="{{$teacher->name}}"> <br><br>
    <label>Teacher Email:</label>
    <input type="email" placeholder="Enter Email" name="email" value="{{$teacher->email}}"> <br><br>


    <button type="submit">Update Teacher</button>
  </form>
</body>
</html>
