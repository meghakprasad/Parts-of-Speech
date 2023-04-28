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
		iframe {
			max-width: 100%;
			height: 500px;
			margin-bottom: 20px;
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
          <li><a href="#">Home</a></li>
          <li><a href="sq.php">Sample Questions</a></li>
		  <li><a href="test.php">Take Test</a></li>
		  
          <li style="float:right"><a href="http://localhost/Hackmitten/logout.php">Logout</a></li>
        </ul>
      </nav>
	<div class="container">
		<h1>Welcome Learner</h1>
        <h3>Quick video on Parts of Speech</h3>
		<br>
	
		<iframe width="560" height="315" src="https://youtu.be/chjmnCSPnbw?t=72" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<br><a href="sq.php" class="next-button">Next</a>
	</div>
</body>
</html>
