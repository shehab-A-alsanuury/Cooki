<?php
session_start();
session_destroy(); 
header('Location: access_control.php'); 
exit();
?>
