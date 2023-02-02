<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //smth was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            
            mysqli_query($con, $query);
            header('Location: login.php');
            die;
        }
        else
        {
            echo "information given is not valid or complete";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="box">
        <form method="post">
            <div style="color:white;"class="LoginTitle">Signup</div>
            
            <input class="text" type="text" name="user_name"><br><br>
            <input class="text" type="password" name="password"><br><br>
            <input class="button "type="submit" value="Signup"><br><br>

            <a href="login.php">Signup</a><br><br>
        </form>
    </div>
</body>
</html>