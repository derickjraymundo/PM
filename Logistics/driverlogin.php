<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "logistics";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $driverUsername = $_POST["user"];
    $driverPassword = $_POST["pass"];

    $sql = "SELECT * FROM driver WHERE username='$driverUsername' AND password='$driverPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['driver_username'] = $driverUsername;
        header("Location: driverdashboard.php");
        exit(); 
    } else {
      
        $loginError = true;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Driver Login</title>
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
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }

        input[type=text],
        input[type=password] {
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

        /* Pop-up styles */
        #popup {
            display: <?php echo isset($loginError) && $loginError ? 'block' : 'none'; ?>;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #closeBtn {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
        }

        img {
            max-width: 20%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div id="popup">
        <img src="redx.jpg">
        <img id="closeBtn" src="redx.jpg" alt="Close" onclick="closePopup()">
        <p>Login unsuccessful. Please check your credentials and try again.</p>
    </div>

    <div class="container">
        <h2> Driver Sign in </h2>
        <form method="post" action="driverlogin.php">
            <label for="user"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="user" required>

            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>

            <button type="submit" name="login">Login</button>
            <br>
            <button onclick="window.location.href='portal.php'"> Go back to Logistics Portal </button>
            <br>
            <br>
            <a href="forgotpass.php">
                <center> Forgot Password? <a />
               <br>
             
        </form>
    </div>

    <script>
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
</body>

</html>
