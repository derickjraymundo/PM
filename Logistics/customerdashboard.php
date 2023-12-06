<?php
session_start();

if (!isset($_SESSION['customer_username'])) {
    header("Location: customerlogin.php");
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

$customerUsername = $_SESSION['customer_username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #C5D8FF, #6296FF);
            text-align: center;
            margin: 100px;
        }

        .rectangle-container {
            width: 300px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
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
        }

        a:hover {
            color: #2980b9;
        }
		table {
    border-collapse: collapse;
    margin-bottom: 20px;
	border: 3px solid black;
}


th, td {
    padding: 12px;
    text-align: left;
    border: 2px solid black; 
	background-color: white;
	vertical-align: 50px;

}

tr:nth-child(even) {
    background-color: #f9f9f9; 
}

tr:hover {
    background-color: #e5e5e5; 
}
img {
    width: 30px;
    height: auto; 
}

    </style>
</head>

<body>

    <div class="rectangle-container">
        <h1>Welcome, <?php echo $customerUsername; ?>!</h1>
		</div>
	<table style = "width:50%; margin: 0 auto;">
	<tr>
	<th colspan = "2"> 
	<a href="customerprofile.php">
    <img src="pic.png" alt="Blank profile picture">
    </a> <?php echo $customerUsername; ?> </th>
	</tr>
	
	<tr style ="height:200px;">
	
	<td> 
	List 
	
	<p>
	<?php

$yourList = array();

if (empty($yourList)) {
    echo "Empty";
} else {
    echo "<ul>";
    foreach ($yourList as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}
?>
	</p>
	</td>
	
    <td> </td>
	</tr>
	
  
 
</table>


	
</body>

</html>
