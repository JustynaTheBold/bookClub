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
	
		<?php include '../config/header.php'; ?>
		<div id="space"></div>
		<?php
		

		if(isset($_GET['book_id'])){
			// echo 'test';

		$book_id = $_GET['book_id'];

		$query = "UPDATE books SET reserved=0 WHERE book_id=".$book_id;
		mysqli_query($conn, $query);


		}

		$sql = "SELECT * FROM authors  JOIN books ON authors.author_name=books.author_name WHERE books.reserved=1" ;
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='mybook'>
					<div class='cover'>
						<img src='../img/".$row['image']."'>
					</div>
					<div class='author'>
						<h3>".$row['author_name']."</h3>
					</div>
					<div class='Tittle'>
						<h3>" .$row['titel'] ."</h3>
					
					</div>
					<form class='return' method='get' action=''>
						<button onclick='reserved' name='book_id' value='".$row['book_id']."' type='submit'>Return</button>
					</form>
			</div>";
		}
	}
else{
			echo " 
			<div id='msg_box'> 
			<h3 id='message'>Sorry, you don't have any books in your library.</h3> 
			</div>";
}
?>

		
	</main>
	<?php include'../config/footer.php';  ?>
	
</body>
</html>