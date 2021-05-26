<?php
include_once('connection.php');
// session_start();

if(isset($_POST['register'])){
    if(isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['username']) and isset($_POST['email']) and isset ($_POST['tel']) and isset($_POST['password']) and isset($_POST['register'])){
  
        $first_name = ($_POST['first_name']);
        $last_name = ($_POST['last_name']);
        $username=($_POST['username']);
        $email=($_POST['email']);
        // $user_gender=($_POST['user_gender']);
        $tel=($_POST['tel']);
        $password=($_POST['password']);
        // $rand = rand(1,2, 3);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
$email_error = 'invalid email addres';

    }
$sql_u = "SELECT * FROM todo_member WHERE username = '$username'";
$sql_e = "SELECT * FROM todo_member WHERE email = '$email'";
$sql_p = "SELECT * FROM todo_member WHERE password = '$password'";
$res_u = mysqli_query($conn, $sql_u);
$res_e = mysqli_query($conn, $sql_e);
$res_p = mysqli_query($conn, $sql_p);

if (mysqli_num_rows($res_u) == 1){
    $name_error = "sorry.... username already exist";

}else if(mysqli_num_rows($res_e) ==1){
    $email_error = "sorry.... email already exist";
}else if(mysqli_num_rows($res_p) >8){
    $password_error = "password should be minimum of 8 characters!";
}


else{
    $sql = "INSERT INTO todo_member (first_name, last_name, username, email,tel, password) VALUES ('$first_name', '$last_name', '$username', '$email', '$tel', md5('$password'))";
    $result = mysqli_query($conn ,$sql);
    echo "Registration successful!";

    header("location:TODO_login.php");
    exit();
}
    
    }


}





?>