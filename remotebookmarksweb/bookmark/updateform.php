<?php
session_start();
//check session first
if (!isset($_SESSION['email'])){
	echo "You are not logged in!";
	exit();
}else{
	//include the header
	include ("../includes/header.php");
	require_once ('../../mysqli_connect.php');
	$id=$_GET['id']; 
	$query = "SELECT * FROM bookmark WHERE id=$id"; 
	$result = @mysqli_query ($dbc, $query);
	$num = mysqli_num_rows($result);
	if ($num > 0) { // If it ran OK, display all the records.
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
			<form action="update.php" method="post">
			Title: <input name="title" size=50 value="<?php echo $row['title']; ?>"><p>
			URL: <input name="url" size=50 value="<?php echo $row['url']; ?>"><p>
			Comment: <br>
			<textarea name="comment" rows=5 cols=100><?php echo $row['comment'];?></textarea>
			<p>
			<input type=submit value=update>
			<input type=reset value=reset>
			<input type=hidden name="id" value="<?php echo $row['id']; ?>">
			</form>
<?php
		} //end while statement
	} //end if statement
	mysqli_close($dbc);
	//include the footer
	include ("../includes/footer.php");
}
?>





