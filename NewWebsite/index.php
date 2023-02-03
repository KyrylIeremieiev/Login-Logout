<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Logout</title>
    <script src="js/main.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="header">
        <div class="buttonBox">
            <button id="button">
                <?php echo $user_data['user_name']; ?>
            </button>    
        </div>
        <div class="logout" id="logout">
            <a class="LogoutButton"href="logout.php">Logout</a>
        </div>
    </header>
    <main>
        <h1>Coming Soon</h1>
    </main>
    <br>
</body>
</html>