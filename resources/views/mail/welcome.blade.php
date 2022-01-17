<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to TODO.</title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Welcome to TODO.</h1>
    <p>Thanks for signing up to the best TODO list website.</p>
    <p>Next steps in your new organized life:</p>
    <ol>
        <li>Create your first list <a href="{{route('lists.create')}}">here</a>.</li>
        <li>Upload a personalized profile picture <a href="{{route('profile.edit')}}">here</a>.</li>
        <li>Share some of your lists with friends or family.</li>
        <li>Feel super organized :)</li>
    </ol>
    <p>Cheers,<br>Patrik Staaf</p>
</body>
</html>
