<?php
session_start();

$timeout_duration = 300; 


if (isset($_SESSION['loggedin'])) {
   
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
     
        session_unset();     
        session_destroy();  

       
        header('Location: log.php'); 
        exit();
    }

   
    $_SESSION['last_activity'] = time();
} else {
    
    header('Location: log.php'); 
    exit();
}
?>
