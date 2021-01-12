<html><body><center>
<img src="../includes/UWMLogo.jpg" alt="UWM Logo" title="UWM Logo" /><br>
<h1>Internet Directory Pro</h1> <br>
<head>
<link rel="stylesheet" href="../includes/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<table width="75%" cellpadding="10"><td width="30%" valign="top">
<?php
if (!isset($_SESSION['email'])){
	echo ("<ul><li><a href=../Home/login.php>Login</a></li> | ");
	echo ("<li><a href=../Home/register.php>Register</a></li> | "); 
	echo ("<li><a href=../Home/forgot.php>Forgot Password?</a></li></ul>");  
} else {
	echo ("<ul><li><a href=../Home/logout.php>Logout</a></li></ul>"); 
} 
?>

<p></td></tr>

<table width="75%" cellpadding="10"><td width="30%" valign="top">

<?php
if (!isset($_SESSION['email'])){
    echo ("<div>");
	echo ("<ul class='sidebar'><li class='sidebar'><a href=../Home/index.php>Home</a></li><br>");
	echo ("<li class='sidebar'><a href=../Home/link.php>Links</a></li></ul><br>"); 
    echo ("</div>");
}else {
	echo ("<ul class='sidebar'><li class='sidebar'><a href=../Home/index.php>Home</a></li><br>");
	echo ("<li class='sidebar'><a href=../bookmark/index.php>Bookmarks</a></li><br>"); 
	echo ("<li class='sidebar'><a href=../contact/contact.php>Contact us</a></li></ul><br>"); 
} 
?>

</td><td valign="top">

