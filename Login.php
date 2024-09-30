<?php
session_start();
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>City Taxi (PVT) Ltd</title>
    <style>
        body {
            background-image: url('taxiback.jpg');
            height: 607px;
            background-size: cover;
            color: black;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 2px;
        }
    </style>
</head>

<body>
    <div style="position:absolute; top:20px; left:20px">
        <br>
        <center><img src="taxilogo.jpeg" width="200"></center> <br>
        <div style="margin:5px;border:2px solid black;padding:5px;width:800">
            <form name="f1" method="post">
                <div style="margin:5px;border:2px solid black;padding:5px;width:350">
                    <h2>
                        <center>Customer Registration</center>
                    </h2>

                    <!-- Registration Form -->
                    <label>NICNo:</label>
                    <input type="text" name="t1"><br><br>

                    <label>Name:</label>
                    <input type="text" name="t2"><br><br>

                    <label>Gender:</label>
                    <input type="text" name="t3"><br><br>

                    <label>Contact:</label>
                    <input type="text" name="t4"><br><br>

                    <label>Email:</label>
                    <input type="text" name="t5"><br><br>

                    <label>Password:</label>
                    <input type="password" name="t6"><br><br>

                    <input type="submit" name="s1" value="Register">
                </div>
            </form>
        </div>

        <!-- Login Form -->
        <div style="position:absolute; top:225px; left:500px;border:2px solid black;padding:10px">
            <img src="taxi3.jpeg" width="280" height="143">
            <h2>
                <center>Login</center>
            </h2>
            <form method="post">
                <label>Username (NICNo):</label>
                <input type="text" name="login_nicno"><br><br> <!-- Updated name -->
                <label>Password:</label>
                <input type="password" name="login_password"><br><br> <!-- Updated name -->
                <input type="submit" name="s2" value="Login">
            </form>
        </div>

        <?php
        $con = mysqli_connect("localhost", "root", "", "asedb");

        // Check for database connection errors
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Registration Handling
        if (isset($_POST["s1"])) {
            if (isset($_POST["t1"]) && isset($_POST["t2"]) && isset($_POST["t3"]) && isset($_POST["t4"]) && isset($_POST["t5"]) && isset($_POST["t6"])) {
                $NICNo = $_POST["t1"];
                $Name = $_POST["t2"];
                $Gender = $_POST["t3"];
                $Contact = $_POST["t4"];
                $Email = $_POST["t5"];
                $Password = password_hash($_POST["t6"], PASSWORD_DEFAULT); // Hash the password

                $sql = "INSERT INTO tblloginregister (NICNo, Name, Gender, Contact, Email, Password) 
                        VALUES ('$NICNo', '$Name', '$Gender', '$Contact', '$Email', '$Password')";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    echo "Registration successful!";
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            } else {
                echo "Please fill in all registration fields.";
            }
        }

        // Login Handling
        if (isset($_POST["s2"])) {
            if (isset($_POST["login_nicno"]) && isset($_POST["login_password"])) {
                $x = $_POST["login_nicno"]; // Username (NICNo)
                $y = $_POST["login_password"]; // Password

                $sql = "SELECT * FROM tblloginregister WHERE NICNo='$x'";
                $result = mysqli_query($con, $sql);

                // Check for SQL query errors
                if (!$result) {
                    die("Error in SQL query: " . mysqli_error($con));
                }

                if ($row = mysqli_fetch_array($result)) {
                    $stored_password = $row['Password'];

                    // Debugging output to check if we get the correct row
                    echo "Stored password hash: " . $stored_password . "<br>";

                    // Check if password matches
                    if (password_verify($y, $stored_password)) {
                        echo "Login successful!";
                        $_SESSION['username'] = $x;
                        header("location:Dashboard.php");
                    } else {
                        echo "Invalid credentials";
                    }
                } else {
                    echo "User not found";
                }
            } else {
                echo "Please enter both username and password.";
            }
        }

        // Close the database connection
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
