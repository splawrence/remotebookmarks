<?php # index.php
session_start();
//check session first
if (!isset($_SESSION['email'])){
echo "<h1>You have not logged in yet!</h1>";
}else{
include ('../includes/header.php');
    echo ("<div id=h2>
	<h2>Contact us</h2>
    <p>Name: Stephen Lawrence</p>
	<p>Email: lawre223@uwm.edu</p></div>");
}
?>

<?php
include ('../includes/footer.php');
?>