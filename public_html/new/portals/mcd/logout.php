<?php 
// can remove these session values after all files are changed.
session_start();
unset($_SESSION['roll']);
unset($_SESSION['username']);
unset($_SESSION['uid']);
session_destroy();

setcookie('email','',time()-3600);
setcookie('roll','',time()-3600);
header("location:index.php");
?>