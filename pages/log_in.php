<DOCTYPE HTML>
<html>
<head>
	<title>Book Database</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	
</head>
<body>
	<?php include '../config/header.php';  ?>
	<main>
		
		
		<?php  
			session_start();

		echo "<div id='login_content'>
				 <h3>Login to My Books</h3>
				<form  method='post'>
					<input class='input_log' type='text' name='username' placeholder='Username'>
					<input class='input_log' type='password' name='password' placeholder='Password'>
					<button id='login_bt' type='submit' name='submit'>LOGIN</button>
				</form>
			</div>";
   
   //code from https://www.tutorialspoint.com/php/php_mysql_login.htm
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      //ensure that any dangerous characters such as ' are not passed to a SQL query
     $myusername = mysqli_real_escape_string($conn,$_POST['username']);
       
      $sql = "SELECT id,user_password,status FROM users WHERE user_name = '$myusername'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC); //fetching array

		// check password and redirect to admin page
     if (password_verify($_POST['password'], $row['user_password']))
		{
	      	$_SESSION['login_user'] = $myusername;
	      	$_SESSION['status'] = $row['status'];

  	      	//check if user is admin moderator or regular selct from data admin moderator regular and compare it
	      	 if ($_SESSION['status']=='admin'){
				header("location:admin_page.php");
	      	} else if ($_SESSION['status']=='moderator'){
				header('location:moderator.php');
	      	} else if($_SESSION['status']=='regular'){
				header('location:library.php');
	      	}
		}
		else
		{
			echo "<div id='promt_login'>
        			<p>Your userame or password is invalid. Please, try again.</p>
        	</div>";		
        }
   }
?>		
		
	</main>


		<?php include '../config/footer.php'?>
</body>
</html>
