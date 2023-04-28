<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learner</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: rgb(4, 32, 56);
            color: #fff;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			text-align: center;
		}
		h1 {
			font-size: 36px;
			margin-bottom: 20px;
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

	</style>
</head>
<body>
<nav>
        <ul>
          <li><a href="learner.php">Home</a></li>
          <li><a href="#">Sample Questions</a></li>
		  <li><a href="test.php">Take Test</a></li>
          <li style="float:right"><a href="http://localhost/Hackmitten/logout.php">Logout</a></li>
        </ul>
      </nav>
	<div class="container">
		<h1>Sample Questions</h1>
		<!DOCTYPE html>
<html>

<body>
	
	<hr>

	<?php
	// Connect to MySQL database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pos";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Query the database for the first 10 sentences and their corresponding parts of speech
	$sql = "SELECT sentence, pos FROM parts_of_speech LIMIT 10";
	$result = mysqli_query($conn, $sql);

	// Display the sentences and their parts of speech
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<p><b>Sentence:</b> " . $row["sentence"] . "</p>";
			echo "<p><b>Parts of Speech:</b> " . str_replace(",", ", ", $row["pos"]) . "</p>";
			echo "<hr>";
			
		}
	}

	// Close database connection
	mysqli_close($conn);
	?>

</body>
</html>

	</div>
</body>
</html>
