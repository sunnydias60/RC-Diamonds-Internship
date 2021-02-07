<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> New student</h1>
<form action="/saveS" method="post">
<?php echo csrf_field(); ?>
<input type="text" name="name" placeholder="name">
<input type="text" name="class" placeholder="class">
<input type="submit" value="save">
</form>

<h1>check</h1>
</form>
<form action="/showT" method="get">
<input type="text" name="name" placeholder="name">
<input type="text" name="class" placeholder="class">
<input type="submit" value="show">
</form>
</body>
</html><?php /**PATH C:\sunny\laravel\sun\resources\views/student.blade.php ENDPATH**/ ?>