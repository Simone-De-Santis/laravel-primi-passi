<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <header>
        <h1>Welcome in my Home</h1>
        <a href="{{ url('/blog') }}"> vai al blog</a>

    </header>
    <footer>
        <p>Created by {{ $creator_name }} {{ $creator_last_name }}</p>
    </footer>
</body>

</html>
