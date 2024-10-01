<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ToDo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div>
    <a href="/groups">Back</a>
</div>
<h1>Group {{$groupData['title']}}</h1>
<div>Id: {{$groupData['id']}}</div>
<div>Created: {{$groupData['created_at']}}</div>
<div>Started: {{$groupData['start_from']}}</div>
<div>Updated: {{$groupData['updated_at']}}</div>
<div>Active: {{$groupData['is_active']}}</div>
<ul>Students:</ul>
@if(count($groupData['students']) === 0)
    <h4>No students was found</h4>
@endif
@if(count($groupData['students'])!== 0)
    <ul>
        @foreach($groupData['students'] as $student )
            <li>
                <a href="/groups/{{$groupData['id']}}/students/{{$student['id']}}">{{$student['surname']}} {{$student['name']}}</a>
            </li>
        @endforeach
    </ul>
@endif
<button><a href="/groups/{{$groupData['id']}}/students/create">Create new student</a></button>
</body>
</html>

