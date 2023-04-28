<style>
  *{
	font-family: sans-serif;
}
body{
	background-image: linear-gradient(rgba(0, 0, 0, 0.23),rgba(0, 0, 0, 0.24)) ,url('https://bia.lighting/wp-content/uploads/2016/04/Sign-Up-Background.png');
	background-size: cover;	 
}
.datalist
{
background-color: black;
color:white;	
}
.aclk{
	color:  orange;
	text-decoration: none;
}
.aclk:hover{
	color:green ;
}
h1{
	text-align: center;
	color: orange;
	font-weight: 50px;
	font-family: sans-serif;
}
h1:hover{
	color: white;

}
.form{
		max-width: 400px;
		background: rgba(0, 0, 0, .57);
		border-radius: 20px;
		box-sizing: border-box ;
		padding: 40px;
		margin: auto;
		color: white;
		margin-top: 100px;	
		margin-bottom: 50px;
}
input[type=text],input[type=password]{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	background:black;
	border: none;
	font-weight: 500;
	font-size: 16px;
	outline: none;
	border-bottom: 1px solid white;
	margin: 6px;
	color: white;
	padding: 12px 5px;
}
input[type=radio]{
	padding: 12px 5px;
	margin: 5px;
	margin-top: 15px;
	color: white;
	background-color: black;
}
button{
	cursor: pointer;
	width: 200px;
	margin-top: 25px;
	margin-left: 60px;
	border-radius: 18px;
	font-size: 25px;
	background-color: orange;
	outline: none;
	border:none;
	box-sizing: border-box;
	padding: 5px;
	transition-duration:0.4s;
}
button:hover{
	background-color: black;
	color: orange;
	border: 1px solid orange;
}
.rad{
	font-weight: 400;
	text-align: center;
	margin: 15px;
	margin-top: 20px;
	color: white;
}
select{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	border: none;
	outline: none;
	font-weight: 100;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 5px;
	color: gray;
	background-color: black;
	padding:12px 5px;
}
.selq{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	background:black;
	border: none;
	font-weight: 500;
	font-size: 16px;
	outline: none;
	border-bottom: 1px solid white;
	margin: 6px;
	color: gray;
	padding: 12px 5px;	
}
</style>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Signup</title>
		<link rel="stylesheet" type="text/css" href="signup.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">
	</head>
	<body>
		<div class="container">
		<form action="signupverify.php" method="post">
			<h1> Signup Here!</h1>

			<form action="index.php" method="get" accept-charset="utf-8">
				<input type="text"  name="Name"  placeholder="name"><br>
				<input type="text"  name="Email_id"  placeholder="Email"><br>
        <input type="text"  name="Phno"  placeholder="Phno"><br>
				<input type="password"  name="psw"  placeholder="password"><br>
		
				
				
				<br>
				
				<select name="user_type" >
					<option class="selp" value="none">user_type</option>
					<option class="selq" value="Admin">Admin</option>
					<option class="selq" value="Learner">Learner</option>
				</select>
				
				<button>Sign Up</button>
				<h3>Already have account ? <a class="aclk" href="learnerlogin.php">Click here!</a></h3>
			</form>
		</div>
	</body>
</html>