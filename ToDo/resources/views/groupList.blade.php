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
    <a href="/">Back</a>
</div>
<h1>{{$pageName}}</h1>
@if(count($groupData) === 0)
    <h3>No groups was found</h3>
@endif
@if(count($groupData)!== 0)
    <ul>
        @foreach($groupData as $group )
            <li><a href="/groups/{{$group['id']}}">{{$group['title']}}</a></li>
        @endforeach
    </ul>
@endif
</body>
</html>
