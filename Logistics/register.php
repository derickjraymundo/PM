<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $servername = "127.0.0.1";
    $username = "localhost";
    $password = "";
    $dbname = "logistics";

 
    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 
    $username = $_POST["username"];
    $email = $_POST["email"];
    $givenname = $_POST["givenname"];
    $initial = $_POST["initial"];
    $surname = $_POST["surname"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO customer (Username, Email, Givenname, MiddleInitial, Surname, Address, Age, Contact, Password) 
            VALUES ('$username', '$email', '$givenname', '$initial', '$surname', '$address', '$age', '$contact', '$password')";

    if ($conn->query($sql) === TRUE) {
           echo '<script>alert("Registration successful!"); window.location.href = "portal.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title> Registration Form </title>
    <style>
	
	
        body {
            font-family: Arial, sans-serif;
			background: linear-gradient(to right, #C5D8FF, #6296FF);
        }

        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: auto;
            margin-top: 50px;
            border: 1px solid black;
            border-radius: 4px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
        <div class="container">
        <h2>Register</h2>
        <form method="post" action="register.php">
		
            <label for="username"><b> Username </b></label>
            <input type="text" placeholder="Enter username" name="username" required>
			
			<label for="email"><b> Email </b></label>
            <input type="text" placeholder="Enter email address" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
			
			<label for="givenname"><b> Given name </b></label>
            <input type="text" placeholder="Enter Given name" name="givenname" required>
			
			<label for="initial"><b> Middle Initial </b></label>
            <input type="text" placeholder="Enter middle initial" name="initial" required>
			
			<label for="surname"><b> Surname </b></label>
            <input type="text" placeholder="Enter surname" name="surname" required>
			
			<label for="address"><b> Address </b></label>
            <input type="text" placeholder="Enter address" name="address" required>
			
			<label for="age"><b> Age </b></label>
            <input type="text" placeholder="Enter your age" name="age" required>
			
			<label for="contact"><b> Contact Number </b></label>
            <input type="text" placeholder="Enter contact number" name="contact" required>
			
			<label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="confirmPassword"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" required>
			
			

          

            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>