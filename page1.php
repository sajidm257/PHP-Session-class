<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="">
        <label>Username</label>
        <input type="text" name="username" required/>
        <br><br>

        <label>Password</label>
        <input type="text" name="password" required/>
        <br><br>

        <input type="submit" value="Login" name="LoginBtn" />
    </form>


    <?php

    session_start();

    if(isset($_REQUEST['LoginBtn'])){
        if($_REQUEST['username']=="Sajid" && $_REQUEST['password']=="Sajid123"){
            $_SESSION["username"]=$_REQUEST['username'];
            $_SESSION['last_time']=time();

            header('location:page2.php');
        }else{
            // header('location:page1.php');
            echo "Username or Password is incorrect";
        }
    }
    ?>
</body>

</html>