<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>new teacher</h1>
    <form action="/saveT" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="class_allocated" placeholder="class allocated">

        <input type="submit" value="save">

        <h1>check</h1>
    </form>
    <form action="/showS" method="get">
        <!-- <input type="text" name="name" placeholder="name"> -->
        <!-- <input type="text" name="class_allocated" placeholder="class allocated"> -->
        <input type="submit" value="show all">
    </form>

    <form action="/deletes" method="get">
        <!-- <input type="text" name="name" placeholder="name"> -->
        <input type="text" name="class_allocated" placeholder="class allocated">
        <input type="submit" value="delete">
    </form>
    
    <form action="/restore" method="get">
        <!-- <input type="text" name="name" placeholder="name"> -->
        <input type="text" name="class_allocated" placeholder="class allocated">
        <input type="submit" value="restore">
    </form>
</body>

</html>