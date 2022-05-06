<?php
$insert = false;
if(isset($_POST['Name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username , $password);
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
        echo "Success connecting to the database.";

        $Name = $_Post['Name'];
        $Gender = $_Post['Gender'];
        $Age = $_Post['Age'];
        $Email = $_Post['Email'];
        $Phone = $_Post['Phone'];
        $Other = $_Post['Other'];
        $sql = "INSERT INTO `survey`.`survey` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Data & time`) VALUES ('$Name', '$Age', '$Gender', '$Email', '$Phone', '$Other', current_timestamp());";
        //echo $sql;

        if($con->query($sql)==true){
            //echo "Successfully inserted";
            $insert = true;
        }
        else{
            echo "Error: $sql <br> $con->error"; 
            // $not_insert = true;
        }
        $con->close();       
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Survey.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- INSERT INTO `survey` (`S.no.`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Data & time`) VALUES ('1', 'Suman', '22', 'Male', 'imsuman276@gmail.com', '7050365403', 'None', '2022-04-25 1:19:19.000000'); -->
</head>
<body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="container">
        <h1>Welcome to Uiet KUK</h1>
        <p>Enter your details and submit this form for better experiences.</p>
        <?php
        if($insert == true){
        echo "<p class='submit'>Thank you submitting your from.</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>