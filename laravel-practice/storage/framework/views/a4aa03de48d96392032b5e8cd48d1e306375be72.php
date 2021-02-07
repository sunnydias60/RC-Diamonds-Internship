<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/showEmployees" method="get">
<input type="submit" value="all employees">
<br>
<br>
</form>

<form action="/employee_call" method="get">
<select name="success_value">
    <option value="1">call started</option>
    <option value="2">finished - successfuly</option>
    <option value="3">finished - unsuccessfully</option>
</select>
  <br><br>
  <input type="submit" value="Submit">
</form>
<br><br>
<form action="/avgCall" method="get">
<select name="operators">
    
    <option value="<">calls below average</option>
    <option value=">">calls above average</option>
</select>
<input type="submit" value="submit">
</form>
    
</body>
</html><?php /**PATH C:\sunny\laravel\sun\resources\views/employee.blade.php ENDPATH**/ ?>