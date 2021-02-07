<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    margin: 10;
    padding: 0;
    box-sizing: border;
    
}
    .container{
        max-width: 80%;
        background-color:yellow;
        margin:auto;
        font-size: large;
    }


</style>
<body>
    <div class="container">
    
    <?php
        $age=17;
        if($age>18){
            echo "you can go";
        }
        else if($age==7){
            echo "you are 7";
        }
        else {
            echo"you cant";
        }
        echo "<br>";
        $lang = array("c", "c++","java");
        echo $lang[0];
        echo "<br>";
        echo count($lang);
        echo "<br>";
        $a=0;
        while ($a <= 10) {
            echo "<br> $a";
            $a++;
        }
        for ($i=0; $i < 10; $i++) { 
            echo "<br> $i";
        }
        foreach ($lang as $value) {
            echo "<br>$value";
        }
        function printnum($num){
            echo "<br>$num";
        }
        printnum(5);







    ?>
    
    </div>
</body>
</html>