<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>
<body>
    <?php

    session_start();

    if(isset($_SESSION['username'])){
        if((time()-$_SESSION['last_time']) > 60){
            header('location:logout.php');
        }else{

            echo "Welcome ".$_SESSION['username'];
        }
    }else{
        header('location:page1.php');
    }
    ?>
<br>
    <a href="page3.php">Go To Page 3</a>
</body>
</html>