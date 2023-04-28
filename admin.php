<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="icon" type="image/x-icon" href="img/setting.png">
    <style>
        /* index.html styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #0a1045;
            margin: 0;
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        nav {
            background-color: #f3c018;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav li a:hover {
            background-color: #111;
            color: #fff;
        }

        /* card styles */
        .card {
            background-color: #4CAF50;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            width: 300px;

        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            font-size: 24px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="http://localhost:5000/#">Add Question</a></li>
            <li style="float:right"><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <h1>Hello Admin</h1>

    <?php
    // connect to database and retrieve number of learners
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pos";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT COUNT(*) as count FROM learner where user_type='learner'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $count = $row["count"];
        }
    } else {
        $count = 0;
    }

    $conn->close();
    ?>

    <div class="card">
        <h2>Number of Learners</h2>
        <p><?php echo $count; ?></p>
    </div>

</body>
</html>
