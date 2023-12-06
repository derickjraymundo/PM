<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Logistics Vendor Portal </title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 75vh;
            margin: 0;
            font-family: Arial, sans-serif;
			background: linear-gradient(to right, #C5D8FF, #6296FF);
			
        }
        header {
            text-align: center;
            color: black;
        }

        nav, section, footer {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            margin: 20px;
            background-color: #f8f8f8;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }

        nav li {
            display: inline;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
		 a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s ease;
			

        }

        a:hover {
            color: #2980b9;
           
        }

    </style>
</head>
<body>

    <header>
        <h1> Welcome to the Logistics Portal!</h1>
    </header>

    <nav>
        <ul>
            <li><a href="adminlogin.php"> Admin </a></li>
            <li><a href="customerlogin.php"> Customer </a></li>
			<li><a href="driverlogin.php"> Driver </a></li>
        </ul>
    </nav>
        <br>
 <br>
  <br>
   <br>
    <br>
	 <br>
	 
	  
        <p>&copy; BSIT 3118 Logistics</p>


</body>
</html>