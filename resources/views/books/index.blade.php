<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All books</h1>
    <a href="/books/create">Create</a>

    <ul>
        @foreach($allBooks as $book)
        <li>
            <h2>{{$book->title}}</h2>
            <p>{{$book->author}}</p>
            <p>{{$book->release_date}}</p>
            <a href="/books/{{$book->id}}">Show</a>
            <a href="/books/{{$book->id}}/edit">Edit</a>
        </li>
        @endforeach
    </ul>
</body>
</html>