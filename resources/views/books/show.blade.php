<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Single post view</h1>

    <p>Title: {{$book->title}}</p>
    <p>Author: {{$book->author}}</p>
    <p>Date: {{$book->release_date}}</p>

    <a href="/books">Back to all Books</a>
</body>
</html>