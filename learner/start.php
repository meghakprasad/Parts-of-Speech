<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learner</title>
	<style>
				form {
			display: inline-block;
			margin: 30px;
			padding: 70px;
			border: 1px solid black;
			border-radius: 5px;
		}
		label {
			display: inline-block;
			width: 100px;
			text-align: right;
			margin-right: 20px;
		}
		input[type="submit"] {
			margin-left: 90px;
			margin-top: 10px;
			padding: 15px 20px;
			border-radius: 5px;
			background-color: #4CAF50;
			color: white;
			border: none;
			cursor: pointer;
		}
form {
  max-width: 600px;
  
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"] {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 20px;
}

select {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 20px;
}

button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
  form {
    padding: 20px;
  }
}
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
          <li><a href="sq.php">Sample Questions</a></li>
		  <li><a href="#">Take Test</a></li>
          <li style="float:right"><a href="http://localhost/Hackmitten/logout.php">Logout</a></li>
        </ul>
      </nav>
	<div class="container">
		<h1>Take Test</h1>
		<!-- partial:index.partial.html -->
		<div id ="left" class="countdown-label">Time Remaining</div>
<input type="hidden" id="set-time" value="30"/>
<div id="countdown">
  
  <div id='tiles' class="color-full"></div>
  
</div>
		<?php


// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $timer_time = $_POST['timer_time'];
    $sql = "INSERT INTO time (time) VALUES ('$timer_time')";

    if ($conn->query($sql) === TRUE) {
        echo "Time saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Fetch all sentences from the database
$sql = "SELECT sentence FROM parts_of_speech";
$result = mysqli_query($conn, $sql);

// Check if there are any sentences
if (mysqli_num_rows($result) > 0) {
    // Store the sentences in an array
    $sentences = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $sentences[] = $row["sentence"];
    }
    
    // Check if the session variable has been set
    if (isset($_SESSION['sentence_index'])) {
        // Increment the sentence index
        $_SESSION['sentence_index']++;
        // Check if the end of the array has been reached
        if ($_SESSION['sentence_index'] >= count($sentences)) {
            // Reset the sentence index to 0
            $_SESSION['sentence_index'] = 0;
        }
    } else {
        // Set the sentence index to a random number
        $_SESSION['sentence_index'] = rand(0, count($sentences) - 1);
    }
    
    // Get the current sentence from the array
    $current_sentence = $sentences[$_SESSION['sentence_index']];
    
    // Display the current sentence
    echo "<p>Selected sentence: " . $current_sentence . "</p>";
    
    // Generate input fields for the current sentence
    $words = explode(" ", $current_sentence);
    echo "<form method='post' action=''>";
    foreach ($words as $word) {
        echo "<label for='$word'>$word:</label>";
        echo "<select id='$word' name='$word'>";
        echo "<option value=''></option>"; // Add blank option
        echo "<option value='PRP'>Pronoun</option>";
        echo "<option value='VBP'>Verb</option>";
        echo "<option value='JJ'>Adjective</option>";
        echo "<option value='NN'>Noun</option>";
        echo "<option value='NNS'>Plural Noun</option>";
        echo "<option value='CD'>Cardinal Number</option>";
        echo "</select><br>";
    }
    echo "<input type='submit' name='submit' value='Submit'>";
    echo "</form>";
    
    // Display a "Next" button to generate other sentences
    echo "<form method='post' action=''>";
    echo "<input type='submit' name='next' value='Next'>";
    echo "</form>";
    
} else {
    echo "No sentences found.";
}



// Close database connection
mysqli_close($conn);
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
 
  <link rel="stylesheet" href="./t.css">

</head>
<body>

<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./t.js"></script>

</body>
</html>


<br>

    <input type="hidden" name="timer_time" id="timer_time" value="0">
    <button type="submit">Submit</button>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./s.js"></script>
</form>

	</div>
</body>
</html>
