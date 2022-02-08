<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h2>{{ $subtitle }}</h2>

    <a href="{{ route('contacts') }}">Contacts</a>
    <a href="{{ route('news') }}">News</a>
    <a href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('other') }}">other</a>
</body>
</html>