<?php # index.php
session_start();
//check session first
if (!isset($_SESSION['email'])){
include ('../includes/header.php');
}else{
include ('../includes/header.php');
}
?>
<div id=h2>
This is the final project for the 440 course. The purpose of the project is to create a web
site for a business. Users will be allowed to register at first. Once they are registered,
they can login and visit the site at any time.
    
<br><br>Internet Directory Pro is a site dedicated to saving links for pertainant resources to save users the headache of losing their place when using public computers.

</div>
<?php
include ('../includes/footer.php');
?>
