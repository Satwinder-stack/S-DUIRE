<?php
// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// This is entirely for logout purposes that is used in different parts of the pages
session_start();
session_destroy();
header("Location: login.php");
exit();
?>
