<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Books</title>
</head>
<body>

<h1>Edit books with id: {{ $book->id }}</h1>
<form action="/books/{{$book->id}}/update" method="post">
    @csrf
    @method('PUT')
    
    <label for="title">Title: </label>
    <input type="text" id="title" name ="title" value="{{$book->title}}">
    <br>


    <label for="author">Author: </label>
    <input type="text" id="author" name ="author" value="{{$book->author}}">
    <br>

    <label for="release_date">Date: </label>
    <input type="date" id="release_date" name="release_date" value="{{$book->release_date}}">
    <br>
    <input type="submit" value="Update">

    <a href="/books">Back to Books</a>

    </form>
</body>
</html>