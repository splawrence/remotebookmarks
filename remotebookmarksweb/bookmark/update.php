<?php
session_start();
//check the session
if (!isset($_SESSION['email'])){
	echo "You are not logged in!";
	exit();
}else{
	//include the header
	include ('../includes/header.php');
	require_once ('../../mysqli_connect.php');
	#execute UPDATE statement
	$id = mysqli_real_escape_string($dbc, $_POST['id']); 
	$title = mysqli_real_escape_string($dbc, $_POST['title']); 
	$url = mysqli_real_escape_string($dbc, $_POST['url']); 
	$comment = mysqli_real_escape_string($dbc, $_POST['comment']); 

	$query = "UPDATE bookmark SET title='$title',url='$url',comment='$comment' WHERE id='$id'"; 
	$result = @mysqli_query ($dbc, $query); 
	if ($result){
		echo "<center><p><b>The selected record has been updated.</b></p>"; 
		echo "<a href=index.php>Home</a></center>"; 
	}else {
		echo "<p>The record could not be updated due to a system error" . mysqli_error() . "</p>"; 
	}
	mysqli_close($dbc);
	//include the footer
	include ("../includes/footer.php");
}

?>
