<?php
include_once('connection.php');
// include_once('TODO_Register_process.php')
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
    color:#999;
    font-family: 'Roboto', sans-serif;
    background-size: cover;

}
.form_group{
    color: white;
    border-radius: 35px;
    background: grey;
    width: 700px;
    height: 600px;

}



</style>
<title>Authentication Page</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.js" defer></script>
<script src="js/popper.js" defer></script>
<script src="js/bootstrap.min.js" defer></script>
</head>
<body>
<div class="form_group">
<h1><center>Register Here</center></h1>
<center>
<h3> <span> fill up this form and start chatting with your friends</span></h3>
<form action="TODO_Register_process.php" method="POST">

First Name: <input type="text" name="first_name" placeholder="input first_name" required="">
<br>
<br>
Last Name: <input type="text" name="last_name" placeholder="input last_name" required="">
<br>
<br>
Username: <input type="text" name="username" placeholder="input username" required="">
<br>
<br>
Email: <input type="Email" name="email" placeholder="input Email" required="">
<br>
<br>

<!-- user_gender: <select>
<option> Male</option>
<option>Female</option>
</select>
<br>
<br> -->
Tel: <input type="number" name="tel" placeholder="input Tel" required="">
<br>
<br>
Password: <input type="text" name="password" placeholder="input password" required="">
<br>
<br>
<input type="checkbox" name="check">Remember me
<br>
<br>
<button type="submit" name="register"> Register</button>

</form>

<p>already Registered <a href="TODO_login.php"> login Here </a></p>
</center>
</div>
</body>
</head>
</html>