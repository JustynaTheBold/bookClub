<?php 
    include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:log_in.php");
   }

   /*
		if ($_SESSION['userip'] !== $_SERVER['REMOTE_ADDR']){
			//if it is not the same, we just remove all session variables
			//this way the attacker will have no session
			session_unset();
			session_destroy();
    }

   */
?>