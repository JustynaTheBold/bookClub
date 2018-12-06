
<html>
<head>
	<title>Book Database</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<?php
	session_start();
	include '../config/header.php'; ?>  
	
	<main>
		
		<figure id="hero">
			<img id="background"src="../img/main.jpg" alt="Main">
				<div id="text">
					<img id="logomain" src="../img/logo.png">
						<h1>Welcome To My Books!</h1>
				</div>
		</figure>
		

		<div id="content">

			<h2 id="About">About Us</h2>
			<p>	Lorem ipsum dolor sit amet, mel tritani erroribus reformidans id, no eum altera urbanitas vituperatoribus. Ius an exerci graece definitiones, ei eum amet persecuti. Eu quo audiam dignissim consequat, agam iriure in vix. Assueverit efficiantur an nam, duo no animal tritani. Sed ea mazim equidem, meis veniam at eam, et vocibus molestie eos.
			Ipsum legere iriure ne eum, ut viris tollit soleat qui. Ea admodum reformidans consequuntur has, per decore legimus evertitur ex. An quem sint cetero vix, ex mel erroribus accommodare, ut nam aliquip insolens. Pro at nonumes consequat, ex adhuc regione nostrum duo. Molestiae tincidunt accommodare te nam, facilis minimum te nec. Sententiae definitionem et pro, nostro facilisis duo no, nec ea nibh sonet.</p>

			<img id="group" src="../img/group.jpg">
			
			<h2>Books Of The Week</h2>
			
			<div id="books">
				<?php  
						$sql = "SELECT * FROM gallery" ;
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0){
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<ul>
									<li>
										<div class='image'>
											<img src=".$row['img_name'].">
										</div>
									</li>
								</ul>";
						}
					}
				?>
			</div>
			
<div id="gap"></div>
		
	</main>
	<?php include'../config/footer.php'; ?>
	
</body>
</html>

