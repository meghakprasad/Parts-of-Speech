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
.next-button {
			display: inline-block;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #fff;
			text-decoration: none;
			border-radius: 4px;
			font-size: 18px;
			transition: background-color 0.3s ease;
		}
		.next-button:hover {
			background-color: #3e8e41;
		}

	</style>
</head>
<body>
<nav>
        <ul>
          <li><a href="learner.php">Home</a></li>
          <li><a href="sq.php">Sample Questions</a></li>
		  <li><a href="#">Take Test</a></li>
          <li style="float:right"><a href="http://localhost/Hackmitten/logout.php">Logout</a></li>
        </ul>
      </nav>
	<div class="container">
		<h1>Take Test</h1>
		<br><a href="start.php" class="next-button">Start Test</a>
	</div>
</body>
</html>
