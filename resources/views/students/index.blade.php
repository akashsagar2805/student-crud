<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>

<body>
    <h1>Students <a href="{{ url('/students/create') }}"> Create Student</a></h1>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td><a href="{{ url('/students/' . $student->id) }}">View</a>
                    <a href="{{ url('/students/' . $student->id .'/edit') }}" >Edit</a>
                    <form action="{{url('/students/' . $student->id)}}" method="post"  style="display: inline"onclick="return confirm('Are you sure you want to delete this item?');">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
