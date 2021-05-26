
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
// include_once("connection.php");

//redirect user to login page if they have not login
// if (!isset($_SESSION['logged_user']) || !$_SESSION['logged_user']) {
//     header("location:index.php");
// }
?>

<?php

include_once("connection.php");

	if (isset($_GET['edit'])) {
		$ID = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM todo_details WHERE ID=$ID");

		if ($record->num_rows >0) {
			$n = mysqli_fetch_array($record);
			$TODO_Name = $n['TODO_Name'];
			$TODO_Date = $n['TODO_Date'];
		}
	}

    if (isset($_GET['Update'])) {
    if(isset($_GET["TODO_Name"]) and isset($_GET["TODO_Date"])){
        $TODO_Name = $_GET['TODO_Name'];
        $TODO_Date = $_GET['TODO_Date'];
        $ID = $_GET['ID'];
    
        mysqli_query($conn, "UPDATE todo_details SET TODO_Name='$TODO_Name', TODO_Date='$TODO_Date' WHERE ID=$ID");
        $_SESSION['message'] = "TODO updated!"; 
        // header('location: index.php');
        echo "TODO updated!";
        
    
    }
    }
?>
<p><a href="TODO_Read.php">Return to homepage</a></p>