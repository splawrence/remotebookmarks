<?php # index.php
session_start();
//check session first
if (!isset($_SESSION['email'])){
include ('../includes/header.php');
}else{
include ('../includes/header.php');
}
?>

<h2>Related Links</h2>
<a href="https://www.wikipedia.org/" target="_blank">www.wikipedia.org/</a><br>
<a href="https://www.wikinews.org/" target="_blank">www.wikinews.org/</a><br>
<a href="https://www.wiktionary.org/" target="_blank">www.wiktionary.org/</a><br>

<?php
include ('../includes/footer.php');
?>