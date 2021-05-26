<?php
include_once("connection.php");

if (isset($_GET['del'])) {
	$ID = $_GET['del'];
	mysqli_query($conn, "DELETE FROM todo_details WHERE ID=$ID");
	$_SESSION['message'] = "TODO deleted!"; 
	header('location: TODO_index.php');
}
?>