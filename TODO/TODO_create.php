

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    </head>
<body>
<?php
session_start();
include_once("connection.php");

//redirect user to login page if they have not login
// if (!isset($_SESSION['logged_user']) || !$_SESSION['logged_user']) {
//     header("location:index.php");
// }




$TODO_Name = "";
	$TODO_Date = "";
	$ID= 0;
	$update = false;
if(isset($_POST["submit"])){

    if(isset($_POST["TODO_Name"]) and isset($_POST["TODO_Date"])){

    
    $TODO_Name = $_POST['TODO_Name'];
    $TODO_Date = $_POST['TODO_Date'];

    $sql ="INSERT INTO todo_details ( TODO_Name, TODO_Date) VALUES ('$TODO_Name','$TODO_Date')";

    if ($conn->query($sql) === TRUE) {
      echo 'New record created successfully';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

}

?>
</body>
</html>