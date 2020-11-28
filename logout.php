<?php

    session_start();
	
	
	unset($_POST);
	unset($_SESSION['user']);


    session_destroy();

	header("Location: login.php");
    exit;
    

?>