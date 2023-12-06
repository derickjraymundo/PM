<?php

session_start();


if (!isset($_SESSION['driver_username'])) {
    header("Location: driverlogin.php"); 

    exit();
}

$userName = "";

$loggedIn = true; 

if ($loggedIn) {
    echo '<div style="position: fixed; top: 10px; right: 10px; background-color: #f0f0f0; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">';
    echo '<span><a href="settings.php">Settings</a></span>';
    echo '<span style="margin-left: 1px;"> | </span>';
    echo '<span><a href="logout.php">Log Out</a></span>';
    echo '</div>';
} else {
  
    header("Location: login.php");
    exit();
}


$driverUsername = $_SESSION['driver_username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Driver Dashboard </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #C5D8FF, #6296FF);
            text-align: center;
            margin: 100px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>

    <div style="position: fixed; top: 10px; right: 10px; background-color: #f0f0f0; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <span><a href="driver_settings.php">Settings</a></span>
        <span style="margin-left: 1px;"> | </span>
        <span><a href="logout.php">Log Out</a></span>
    </div>

    <h1>Welcome, Driver <?php echo $driverUsername; ?>!</h1>

    <p>This is your driver dashboard. Feel free to explore and use the available features.</p>

</body>
</html>