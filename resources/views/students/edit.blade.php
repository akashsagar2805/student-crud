<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
</head>
<body>
  <h1>Edit Student</h1>
  <form action="{{url('/students/' . $student->id)}}" method="post">
    @method('put')
    @csrf
    <label>Student Name:</label>
    <input type="text" placeholder="Enter Name" name="name" value="{{$student->name}}"> <br><br>
    <label>Student Email:</label>
    <input type="email" placeholder="Enter Email" name="email" value="{{$student->email}}"> <br><br>
    <label>Student Phone:</label>
    <input type="text" placeholder="Enter Phone" name="phone" value="{{$student->phone}}"> <br><br>
    <label>Student City:</label>
    <input type="text" placeholder="Enter City" name="city" value="{{$student->city}}"> <br><br>
    <label>Student State:</label>
    <select name="state">
        <option value="">Select State</option>
        <option value="maharashtra"{{$student->state == 'maharashtra' ? 'selected' : ''}}>Maharashtra</option>
        <option value="madhyapradesh"{{$student->state == 'madhyapradesh' ? 'selected' : ''}}>Madhya Pradesh</option>
        <option value="punjab"{{$student->state == 'punjab' ? 'selected' : ''}}>Punjab</option>
        <option value="gujrat"{{$student->state == 'gujrat' ? 'selected' : ''}}>Gujrat</option>
        <option value="telangana"{{$student->state == 'telangana' ? 'selected' : ''}}>Telangana</option>
    </select><br><br>
    <label>Student Address:</label>
    <textarea name="address" id="" cols="25" rows="10" placeholder="Enter Address">{{$student->address}}</textarea>
    <br><br>
    <button type="submit">Update Student</button>
  </form>
</body>
</html>
