
<!DOCTYPE html>
<?php

// session_start();
// //redirect user to login page if they have not login
// if (!isset($_SESSION['logged_user']) || !$_SESSION['logged_user']) {
//     header("location:index.php");
// }

include_once("connection.php");
// include_once("file.php");
?>


<html>
<head>
<title> Reset password</title>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    </head>

<body>
<form action="" method="POST">
<!-- Email: <br><input type="email" name="email" placeholder="input your email" required=""><br><br> -->
Old Password: <br> <input type="password" name="old_pass" placeholder="input old password" required=""><br><br>
New Password: <br><input type="password" name="new_pass" placeholder="Input New Password" required=""><br><br>
<a href="TODO_login.php">Login</a>
<button type="submit" name="update">Update</button>
</form>
<?php
    // old pass and email from logged user session
    $old_password = ($_SESSION['logged_user']['password']);
    $user_email = ($_SESSION['logged_user']['email']);


if(isset($_POST['update'])){
    // old and new pass from form input
    $i_new_password = md5($_POST ['new_pass']);
    $i_old_password = md5($_POST['old_pass']);

    if($old_password == $i_old_password){

        $query = "UPDATE todo_member SET password ='$i_new_password' WHERE email = '$user_email'";
        $res = mysqli_query($conn, $query);
        echo ($res) ? "Updated" : "Unable to update";

        }else{
            "incorrect password supplied";
        }
    
}

?>
</body>


</html>
