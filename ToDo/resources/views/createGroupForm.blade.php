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
<form method="post" action="/groups">
    @csrf
    @method('POST')
    <div>
        <label for="title">Title</label>
        <input name="title" id="title" required>
    </div>
    <div>
        <label for="start_from">Start from</label>
        <input name="start_from" id="start_from" type="date" required>
    </div>
    <div>
        <label for="is_active">Active</label>
        <input name="is_active" id="is_active" type="checkbox" required>
    </div>
    <button>Create</button>
</form>
</body>
</html>

