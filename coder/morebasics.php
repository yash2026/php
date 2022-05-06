<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding : 23px;
    }
</style>
<body>
    <div class="container">
    <h1>Yash's Party</h1>
    <p>Your party status is here:</p>
        <?php
            $age = 34;
            if($age>18){
                echo "You can go to the party. <br>";
            }
            else{
                echo "You can't go to party. ";
            }

        ?>
    </div>
</body>
</html>