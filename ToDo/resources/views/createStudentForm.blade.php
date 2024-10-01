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
    <a href="/groups/{{$id}}">Back</a>
</div>
<h1>Create new student</h1>

<form method="post" action="/groups/{{$id}}/students">
    @csrf
    @method('POST')
    <div>
        <label for="name">name</label>
        <input name="name" id="name" required>
    </div>
    <div>
        <label for="surname">surname</label>
        <input name="surname" id="surname" required>
    </div>
    <button>Create</button>
</form>
</body>
</html>

