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
	echo ("<html><title>Search Results</title><center>"); 
	echo ("<a href=searchform.php>Another Search</a><p>"); 
	echo ("<a href=index.php>Home</a><p>"); 
	//formulate the search query
	if (!empty($_POST['id'])||!empty($_POST['title'])||!empty($_POST['url'])
		||!empty($_POST['comment'])){
		$id = mysqli_real_escape_string($dbc, $_POST['id']); 
		$title = mysqli_real_escape_string($dbc, $_POST['title']); 
		$url = mysqli_real_escape_string($dbc, $_POST['url']); 
		$comment = mysqli_real_escape_string($dbc, $_POST['comment']); 
		
		$query="SELECT * FROM bookmark WHERE (title LIKE '%$title%')
		AND (url LIKE '%$url%')
		AND (comment LIKE '%$comment%')";
	}else {
		$query="SELECT * FROM bookmark";
	}
	$result = @mysqli_query ($dbc, $query);
	$num = mysqli_num_rows($result);
	if ($num > 0) { // If it ran OK, display all the records.
		echo "<p><b>Your search returns $num entries.</b></p>";
		echo "<table cellpadding=5 cellspacing=5 border=1><tr>
		<th>Title</th><th>Comment</th><th>URL</th><th>*</th><th>*</th></tr>"; 
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			echo "<tr><td>".$row['title']."</td>"; 
			echo "<td>".$row['comment']."</td>"; 
			echo "<td><a href=".$row['url']." target=_blank>".$row['url']."</a></td>"; 
			echo "<td><a href=deleteconfirm.php?id=".$row['id'].">Delete</a></td>"; 
			echo "<td><a href=updateform.php?id=".$row['id'].">Update</a></td></tr>"; 
		} // End of While statement
		echo "</table>"; 
		       
	} else { // If it did not run OK.
		echo '<p>Your search hits no result.</p>';
	}
	mysqli_close($dbc); // Close the database connection.
	echo ("</center></html>"); 
	//include the footer
	include ("../includes/footer.php");
}

?>