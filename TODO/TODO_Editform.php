<?php
include_once("TODO_Edit.php");
?>

<!DOCTYPE html>
<html>
<body>

<form action="TODO_Edit.php" method="GET">
<input type="hidden" name="ID" value="<?php echo $ID; ?>">
TODO: <input type="text" name="TODO_Name" placeholder="input TODO"require="">
TODO_Date: <input type="date" name="TODO_Date" placeholder="input Date"require=""> 

 <button type="submit" name="Update">Update</button>

</form>
</body>


</html>