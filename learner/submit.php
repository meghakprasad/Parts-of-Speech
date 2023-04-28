<?php
	// Connect to the MySQL database
	$host = 'localhost';
	$user = 'username';
	$password = 'password';
	$database = 'pos';
	$conn = mysqli_connect($host, $user, $password, $database);

	// Get the submitted data
	$sentences = $_POST['sentence'];
	$pos_answers = $_POST['pos'];

	// Loop through each submitted sentence and store the answers in the database
	for ($i = 0; $i < count($sentences); $i++) {
		$sentence = $sentences[$i];
		$pos_tags = json_decode(mysqli_fetch_assoc(mysqli_query($conn, "SELECT pos FROM parts_of_speech WHERE sentence = '$sentence'"))['pos']);
		
		for ($j = 0; $j < count($pos_tags); $j++) {
			$word = $pos_tags[$j][0];
			$expected_pos = $pos_tags[$j][1];
			$actual_pos = mysqli_real_escape_string($conn, $pos_answers[$i * count($pos_tags) + $j]);

			mysqli_query($conn, "INSERT INTO pos_answers (sentence, word, expected_pos, actual_pos) VALUES ('$sentence', '$word', '$expected_pos', '$actual_pos')");
		}
	}

	// Close the MySQL connection
	mysqli_close($conn);

	// Redirect to a confirmation page
	header('Location: confirmation.php');
	exit();
?>
