<?php
$insert=false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("failed due to".
    mysqli_connect_error());
}
//echo"success";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];


$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) 
VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
//echo $sql;

if($con->query($sql) == true){
    //echo "successful";
    $insert=true;
}
else{
    echo "error: $sql <br> $con->error";
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="image" src="trip1.jpg" alt="trip">
    <div class="container">
        <h1>Welcome to trip form</h1>
        <p>Enter details to confirm participation in the trip</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting the form</p>";
        }
        ?>

        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any additonal information here"></textarea>
            <button class="btn">Submit</button>
            
        </form>
        
    </div>
    
</body>
</html>