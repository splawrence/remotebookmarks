<?php 
session_start();
//check session first
if (!isset($_SESSION['email'])){
	echo "You are not logged in!";
	exit();
}else{
	//include the header
	include ("../includes/header.php");
?>
	<html>
	<head>
		<title>Search Form</title>
	</head>
	<body>
	<table>
	<form action="search.php" method="post">
	<tr>
		<td>Title: <input name="title" size=50 value=""></td>
	</tr>
	<tr>
		<td>URL: <input name="url" size=50 value=""></td>
	</tr>
	<tr>
		<td>Comment: <br>
		<textarea name="comment" rows=5 cols=100></textarea></td>
	</tr>
	<tr>
		<td><input type=submit value=search>
		<input type=reset value=reset></td>
	</tr>
	<input type=hidden name="id" value="<? echo $row['id'];?>">
	</form>
	</table>
	</body>
	</html>
<?php
	//include the footer
	include ("../includes/footer.php");
}
?>