<?php
session_start();
//check session first
if (!isset($_SESSION['email'])){
	echo "You are not logged in!";
	exit();
}else{
	//include the header
	include ('../includes/header.php');
	require_once ('../../mysqli_connect.php');
	$id=$_GET['id'];  
	$query = "SELECT * FROM bookmark WHERE id=$id"; 
	$result = @mysqli_query ($dbc, $query);
	$num = mysqli_num_rows($result);
	if ($num > 0) { // If it ran OK, display all the records.
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			echo $row['url']."<br>".$row['title']."<p>"; 
		} // End of While statement
		echo "Are you sure that you want to delete this record?<br>";
		echo "<a href=delete.php?id=".$id.">YES</a> 
			<a href=index.php>NO</a>";          
	}else{ // If it did not run OK.
		echo '<p>There is no such record.</p>';
	}
	mysqli_close($dbc); // Close the database connection.
	//include the footer
		include ('../includes/footer.php');
}

?>
