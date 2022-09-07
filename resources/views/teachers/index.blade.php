<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers</title>
</head>

<body>
    <h1>Teachers <a href="{{ url('/teachers/create') }}"> Create Teacher</a></h1>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>

            <th>Actions</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>

                <td><a href="{{ url('/teachers/' . $teacher->id) }}">View</a>
                    <a href="{{ url('/teachers/' . $teacher->id .'/edit') }}" >Edit</a>
                    <form action="{{url('/teachers/' . $teacher->id)}}" method="post"  style="display: inline"onclick="return confirm('Are you sure you want to delete this item?');">
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
