<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Books</title>
</head>
<body>
    <form action="/books" method="post">
    @csrf
    
    <label for="title">Title: </label>
    <input type="text" id="title" name ="title">
    <br>

    <label for="author">Author: </label>
    <input type="text" id="author" name ="author">
    <br>

    <label for="dates">Date: </label>
    <input type="date" id="dates" name ="dates">
    <br>
    <input type="submit" value="Submit">

    <a href="/books">Back to Books</a>

    </form>
</body>
</html>