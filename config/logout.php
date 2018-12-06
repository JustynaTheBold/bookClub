<?php
   session_start();
   
	   if(session_destroy()) {
	      header('Location: http://localhost:1234/labs/lab1/pages/log_in.php');
	   }
  
?>