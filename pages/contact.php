<DOCTYPE HTML>
<html>
<head>
	<title>Book Database</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<main>
		<?php session_start(); ?>
		<div id="space"></div>
		<?php include '../config/header.php'; ?>
		<?php include '../config/contact.php'?>
		<div id="content">
			<div id="contact">
				<h2 id="pagetittle">Let's get in touch</h2>
				<p>Lorem ipsum dolor sit amet, mel tritani erroribus reformidans id, no eum altera urbanitas vituperatoribus. Ius an exerci graece definitiones, ei eum amet persecuti. Eu quo audiam dignissim consequat, agam iriure in vix. Assueverit efficiantur an nam, duo no animal tritani. Sed ea mazim equidem, meis veniam at eam, et vocibus molestie eos.
				</p>
				<form id='contact_form' action="contact.php" method="post">
					  <input type="text" name="Author" placeholder="Your Full Name">
					  <input type="text" name="Mail" placeholder="Your E-Mail">
					  <input type="text" name="Subject" placeholder="Subject">
					  <textarea name="message" placeholder="Enter Your Message"></textarea>
					  <button type="submit" name="submit">Send Mail</button>
				</form> 
			</div>
		</div>

		
	</main>
	<?php include'../config/footer.php';  ?>
	
</body>
</html>