<?php
include('TODO_loginpro.php');
?>

<!DOCTYPE html>
<html>
<head>
    <style>
body{
    color: burlywood;
    background-size: cover;
    font-family: serif;
}
.login1{
    border-radius: 24px;
    background: cadetblue;
    color: burlywood;
    height: 350px;
    width: 600px;
}


    </style>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.js" defer></script>
<script src="js/popper.js" defer></script>
<script src="js/bootstrap.min.js" defer></script>

</head>
<body>
    
    <div class="login1">
        <center>
        <h1 id="log">Login Page</h1>

        <form action="TODO_index.php" method="POST">

            <div class="l">
                Username: <br><input type="text" name="username" placeholder="input Username" required="">
            </div><br>

            <div>
                password: <br><input type="password" name="password" placeholder="password" required="">
            </div><br>

            <input type="checkbox" id="check">
            <span> Remember me </span>

            <button type="submit" name="login" value="Login">login Here</button><r><br><br>
            <p>Forgot Password?<a href="TODO_forgotpass.php">click Here</a></p>


            <p><a href="TODO_Register.php"> Register Here</a></p>
            
        </form>
        </center>
    </div>
    </head>
</body>

</html>