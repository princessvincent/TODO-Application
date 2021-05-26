<?php
include_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<body>
<form action="" method="POST">
Email: <br><input type="email" name="email" placeholder="input your email" required=""><br>
New Password: <br><input type="password" name="pass" placeholder="Input New Password" required=""><br><br>
<a href="TODO_login.php">Login</a>
<button type="submit" name="update">Update</button>
</form>
<?php
    
if(isset($_POST['update'])){

    $email = $_POST['email'];
    $password = $_POST['pass'];

    $query = "UPDATE todo_member SET password =md5('$password') WHERE email = '$email'";
    $res = mysqli_query($conn, $query);
    echo ($res) ? "Updated" : "Unable to update";
}else{
"invalid credentials";
}

?>
</body>
</head>

</html>