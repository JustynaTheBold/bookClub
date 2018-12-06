<DOCTYPE HTML>
<html>
<head>
	<title>Book Database</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<?php session_start() ?>
	
	<main>

		<div id="space"></div>
		
		<?php
		include '../config/header.php'; 

		if(isset($_GET['book_id'])){

		$book_id = $_GET['book_id'];
		$query = "UPDATE books SET reserved=1 WHERE book_id=".$book_id;
		mysqli_query($conn, $query);
				echo
					"<div id='prompt'><h2>You reserve a book. Go to my library and see all your books.</h2> </div>";		
		}

		$sql = "SELECT * FROM authors  JOIN books ON authors.author_name=books.author_name" ;
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

				while ($row = mysqli_fetch_assoc($result)) {
				echo "
				<div class='mybook'>
					<div class='cover'>
						<img src='../img/".$row['image']."'>
					</div>
					<div class='author'>
						<h3>".$row['author_name']."</h3>
					</div>
					<div class='Tittle'>
						<h3>" .$row['titel']."</h3>
					
					</div>
					<form class='return' method='get' action=''>
						<button id='booking' name='book_id' value='".$row['book_id']."' type='submit'>Reserve</button>
					</form>
			</div>";
			}

	?>
		
	</main>
	
	<?php include'../config/footer.php';  ?>
</body>
</html>