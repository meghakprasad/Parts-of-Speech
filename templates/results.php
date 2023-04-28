<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Part of Speech Tagger</title>
    <style>
        /* index.html styles */
body {
    font-family: Arial, sans-serif;
    background-color: #0a1045;
    margin: 0;
}

h1 {
    text-align: center;
    margin-top: 50px;
}

form {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

button[type="submit"] {
    display: block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

/* results.html styles */
table {
    width: 80%;
    margin: 50px auto;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

thead {
    background-color: #4CAF50;
    color: #fff;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th:first-child, td:first-child {
    border-left: 1px solid #ddd;
}

th:last-child, td:last-child {
    border-right: 1px solid #ddd;
}

tr:hover {
    background-color: #f5f5f5;
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
h1{
    color: #fff;
}

        </style>
</head>
<body>
    <nav>
        <ul>
          <li><a href="http://localhost/Hackmitten/admin.php">Home</a></li>
          <li><a href="http://localhost:5000/#">Add Question</a></li>
          <li style="float:right"><a href="http://localhost/Hackmitten/logout.php">Logout</a></li>
        </ul>
      </nav>
    <h1>Part of Speech Tagger Results</h1>
    <table>
        <thead>
            <tr>
                <th>Word</th>
                <th>Part of Speech</th>
            </tr>
        </thead>
        <tbody>
            {% for word, pos in pos_tags %}
                <tr>
                    <td>{{ word }}</td>
                    <td>{{ pos }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</body>
</html>
