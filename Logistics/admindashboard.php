<?php

session_start();


if (!isset($_SESSION['admin_username'])) {
    header("Location: adminlogin.php"); 
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
 
    exit();
}


$adminUsername = $_SESSION['admin_username'];

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'logistics';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM driver";
$result = $conn->query($sql);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #C5D8FF, #6296FF);
            margin: 50px;
        }
		    .rectangle-container {
            width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
			text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
		
		table {
			margin: 20px auto;
			border: 2px solid black;
			border-collapse: collapse;
			border-radius: 10px;
	
		}
		th {
			border: 2px solid black;
			background-color: white;
		}
		td {
			border: 2px solid black;
			background-color: white;
			vertical-align: top;
			padding: 10px;
		}

        h1 {
            color: #333;
        }

        p {
            color: #555;
			text-align: center;
        }

        a {
            text-decoration: none;
            color: #3498db;
			margin: 0 40px;
        }

        a:hover {
            color: black;
        }
		img {
			max-width: 100px;
            height: auto;
		}
		   #map {
            height: 400px;
            width: 100%;
        }
		
    </style>
</head>
<body>

    <div style="position: fixed; top: 10px; right: 10px; background-color: #f0f0f0; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <span><a href="settings.php">Settings</a></span>
        <span style="margin-left: 1px;">|</span>
        <span><a href="logout.php">Log Out</a></span>
    </div>
	
	  <div class="rectangle-container">
        <h1>Welcome, Admin <?php echo $adminUsername; ?>!</h1>
		</div>
		
	
	<table style = "width:1080px; height:540px;">
	<tr style = "height: 10px">
	<td colspan ="4"> 
	<img src="logo.png">
	<a href = "active.php" style = "vertical-align: 40px;"> Active </a>
	<a href = "messages.php" style = "vertical-align: 40px;"> Messages </a>
	<a href = "customers.php" style = "vertical-align: 40px;"> Customers </a>
	<a href = "carriers.php" style = "vertical-align: 40px;"> Carriers </a>
	</td>
	</tr>
	
	
	
	
	<tr>
	<td rowspan ="2" width = 150px>
	Deliveries 
	<p> 
	<?php
            $yourList = array();

        if (empty($Deliveries)) {
            echo "Empty";
            } else {
            echo "<ul>";
            foreach ($Deliveries as $delivery) {
            echo "<li>$delivery</li>";
            }
            echo "</ul>";
}
?>
	</td>
	
	
	
	<td> 
	
	Driver Information: 
	
	<br>
    <br>
	<br>
	<?php
	
	?>

			<br>
				<br>
  <button type="submit" name="carphoto">See Car Photo</button>


	</td>
	

	
	<td colspan = "2"> 
	Live Map: 
	<p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7717.506910523131!2d121.0341769174103!3d14.726526157396622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0ff7eb3d621%3A0x437d85420878d598!2sBestlink%20College%20of%20the%20Philippines!5e0!3m2!1sen!2sph!4v1701848950905!5m2!1sen!2sph" width="250" height="300" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</p>
	</td>
	</tr>
	<tr>
	<td> Customer Information: </td>
	<td width = 250px> Departure: </td>
    <td> Arrival: </td>
	</tr>
	</table>

</body>
</html>
