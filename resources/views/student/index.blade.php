<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
</head>
<body>
    <ul>
        <li><a href={{ route('student.index') }}>Student List</a></li>
        <li><a href={{ route('student.create') }}>Create Student</a></li>
    </ul>
<h1>All Student List Here</h1>
    @foreach ($students as $student )
        <p>{{ $student->name }}</p>
    @endforeach
</body>
</html>