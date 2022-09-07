<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
  <h1>Create Student</h1>
  <form action="{{url('/students')}}" method="post">
    @csrf
    <label>Student Name:</label>
    <input type="text" placeholder="Enter Name" name="name"> <br><br>
    <label>Student Email:</label>
    <input type="email" placeholder="Enter Email" name="email">
    <br><br>
    <label for="teacher">Select Teacher</label>
        <select name="teacher">
            <option value="">Select Teacher</option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select> <br><br>
    <label>Student Phone:</label>
    <input type="text" placeholder="Enter Phone" name="phone"> <br><br>
    <label>Student City:</label>
    <input type="text" placeholder="Enter City" name="city"> <br><br>
    <label>Student State:</label>
    <select name="state">
        <option value="">Select State</option>
        <option value="maharashtra">Maharashtra</option>
        <option value="madhyapradesh">Madhya Pradesh</option>
        <option value="punjab">Punjab</option>
        <option value="gujrat">Gujrat</option>
        <option value="telangana">Telangana</option>
    </select><br><br>
    <label>Student Address:</label>
    <textarea name="address" id="" cols="25" rows="10" placeholder="Enter Address"></textarea>
    <br><br>
    <button type="submit">Save Student</button>
  </form>
</body>
</html>
