<?php 

if (isset($_POST['submit'])) {
	$name= $_POST['Author'];
	$mailFrom= $_POST['Mail'];
	$subject= $_POST['Subject'];
	$message= $_POST['message'];

	$mailTo="seju17zd@student.ju.se";
	$headers="From: " .$mailFrom;
	$txt="You have recived a message from ".$name.". \n\n".$message;

	mail($mailTo, $subject, $txt, $headers);  
	header("Location: index.php?mailsend");
}
?>