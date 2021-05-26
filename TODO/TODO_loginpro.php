<?php
session_start();
include_once('connection.php');

if (isset($_POST['login'])) {

    if (isset($_POST['email']) and isset($_POST['password'])) {

        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = mysqli_query($conn, "SELECT * FROM todo_member WHERE email='$email' and password='$password'");

        if (mysqli_num_rows($query) >= 1) {
            $_SESSION['logged_user'] = mysqli_fetch_assoc($query);
            header('location:TODO_index.php');
        } else {
            echo 'invalid email or password! <a href="Login.php">try again</a>';
        }
    }
}
