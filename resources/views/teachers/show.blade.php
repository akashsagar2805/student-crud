<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Detail</title>
</head>
<body>
    <h1>Teacher Detail <a href="{{url('/teachers')}}">Teachers List</a></h1>
    <h2>{{$teacher->name}}</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <td>{{$teacher->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$teacher->email}}</td>
        </tr>



    </table>
</body>
</html>
