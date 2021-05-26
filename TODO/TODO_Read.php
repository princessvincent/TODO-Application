<?php
include_once("connection.php");

// if (isset($_GET['do']) && $_GET['do'] == "delete") {
//     $id = $_GET['id'];
//     $query2 = "DELETE FROM todo_details WHERE ID='$ID'";
//     $query_run2 = mysqli_query($conn, $query2);
// }


//redirect user to login page if they have not login
// if (!isset($_SESSION['logged_user']) || !$_SESSION['logged_user']) {
//     header("location:index.php");
// }

?>


<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    </head>
<body>

<?php $results = mysqli_query($conn, "SELECT * FROM todo_details"); ?>

<table border="1" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<th>TODO_Name</th>
			<th>TODO_Date</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_assoc($results)) { ?>
		<tr>
			<td><?php echo $row['TODO_Name']; ?></td>
			<td><?php echo $row['TODO_Date']; ?></td>
			<td>
				<a href="TODO_Editform.php?edit=<?php echo $row['ID']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="TODO_Delete.php?del=<?php echo $row['ID']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<form>
    <p>want to return to Application List<a href="TODO_index.php"> click Here</a></p>
</body>
</html>

