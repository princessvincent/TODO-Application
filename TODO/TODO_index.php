<?php
// session_start();
include_once("connection.php");

//redirect user to login page if they have not login
// if (!isset($_SESSION['logged_user']) || !$_SESSION['logged_user']) {
//     header("location:TODO_Register.php");
// }
include_once("TODO_create.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    </head>
<style>
body{
    color: burlywood;
    background-size: cover;
    font-family: serif;
}
div{
    border-radius: 24px;
    background: whitesmoke;
    color: burlywood;
    height: 350px;
    width: 600px;
}
.todo{
    color: red;

}
view{
    border: greenyellow;
    border-radius: 5px;
}
</style>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<body>
<div>
<center>
<h1 style="color: red;">TODO Application list</h1>
<form action="TODO_create.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
 TODO_Name: <input type="text" name="TODO_Name" placeholder="input_TODO" required="">
<br>
<br>
TODO_Date: <input type="date" name="TODO_Date" placeholder="input_date"  required="">
<br>
<br>
Add TODO: <input type="submit" name="submit">
</form>
    <br>    <p><a href="TODO_Read.php"> view TODO</a></p>                                 <p><a href="Resetpassword.php"> change Your Password</a></p>
    </center>
</div>
</body>
</html>