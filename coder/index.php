<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <div class="container">
        This is the learning project on php.
        <?php
            echo "Hello world, I am Yash";

            echo "<br>";
            echo $variable1 = 34;
            echo "<br>";
            echo $variable2 = 44;
            echo "<br>";

            echo "The sum of variable1 and variable2 is: ";
            echo $variable1 + $variable2;
            echo "<br>";
            echo "The difference of variable2 and variable1 is: ";
            echo $variable2 - $variable1;
            echo "<br>";
            echo "The multiplication of variable1 and variable2 is: ";
            echo $variable2 * $variable1;
            echo "<br>";
            echo "The value of variable2 divided by variable1 is: ";
            echo $variable2/$variable1;
            echo "<br>";

            echo var_dump(1==4);
            echo "<br>";
        ?>
    </div>    

</body>
</html>