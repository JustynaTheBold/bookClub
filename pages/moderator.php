<DOCTYPE HTML>
<html>
<head>
	<title>Book Database</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	
	<?php 
	session_start();
	include ('../config/header_two.php');?>
	<main>
		<div id='space'></div>
		<h1>Welcome to Moderator Page</h1>
		<h2 id="books">All books</h2>

			<?php
		

		if(isset($_GET['book_id'])){

		$book_id = $_GET['book_id'];

		$query = "DELETE FROM books WHERE book_id=".$book_id;
		mysqli_query($conn, $query);


		}

		$sql = "SELECT * FROM authors  JOIN books ON authors.author_name=books.author_name " ;
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
						<button onclick='reserved' name='book_id' value='".$row['book_id']."' type='submit'>Delete</button>
					</form>
			</div>";
		}
	}
?>

	<h2 id="add_book">Add books</h2>	

			<div id="add_user">
					<form  method='post'  enctype='multipart/form-data'>
						<input class='add_u' type='text' name='titel' placeholder="Book's Titel">
						<input class='add_u' type='text' name='author' placeholder='Author'>
						<input class='add_u' type='text' name='ISBN' placeholder='ISBN'>
						<input class='add_u' type='text' name='pages' placeholder='Number of Pages'>
						<input class='add_u' type='text' name='edition' placeholder='Edition'>
						<input class='add_u' type='text' name='publisher' placeholder='Publisher'>
						<input class='add_u' type='text' name='year' placeholder='Year'>
						<p>Upload Book's cover</p>
						<input id='input_upl' type='file' name='bookCover' id='fileToUpload'>
						<button id='add_bt' type='submit' name='add_book'>Add New Book</button>
					</form>
			</div>
			
	<?php  
		//get the input and add to database;
		if(isset($_POST['add_book'])){
			$newBookTitel = mysqli_real_escape_string($conn,$_POST['titel']); 
      		$newBookAuthor = mysqli_real_escape_string($conn,$_POST['author']);
      		$newBookISBN = mysqli_real_escape_string($conn,$_POST['ISBN']);
      		$newBookPages = mysqli_real_escape_string($conn,$_POST['pages']);
      		$newBookEdition = mysqli_real_escape_string($conn,$_POST['edition']);
      		$newBookPub = mysqli_real_escape_string($conn,$_POST['publisher']);
      		$newBookYear=mysqli_real_escape_string($conn,$_POST['year']);
      		$target_folder = "../img/"; //where file will be placed
			$target_files = $target_folder . basename($_FILES['bookCover']["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));
			
			if(isset($_POST["add_book"])) {
				$check = getimagesize($_FILES["bookCover"]["tmp_name"]);
				        
				   	if($check !== false) {
				        $uploadOk = 1;
				    } else {
				        $uploadOk = 0;
				    }
			}
			if ($_FILES["bookCover"]["size"] > 500000) {
			
				        $uploadOk = 0;
				    }
				    // Allow certain file formats
				    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
				        
				        $uploadOk = 0;
				    }
				    
				    if ($uploadOk == 0) {
				       
				    // if everything is ok, try to upload file
				    } else {
				        if (move_uploaded_file($_FILES["bookCover"]["tmp_name"], $target_files)) {

				        	$query = "INSERT INTO books (ISBN,titel,author_name,pages,edition,year,publisher,image) 
  									VALUES('$newBookISBN','$newBookTitel', '$newBookAuthor', '$newBookPages','$newBookEdition','$newBookYear','$newBookPub','$target_files');";
  							mysqli_query($conn, $query); 
  							
  							$query2 = "SELECT author_name FROM authors WHERE author_name='$newBookAuthor'";
  							$result = mysqli_query($conn, $query2);
							$resultCheck = mysqli_num_rows($result);
  							if ($resultCheck==0){
  								$sql="INSERT INTO authors (author_name) 
  									VALUES('$newBookAuthor');";
  									mysqli_query($conn, $sql); 
  							}	
  							//check if book author exists 
  							$query3 = "SELECT * FROM book_author WHERE author='$newBookAuthor' AND book='$newBookTitel'";
  							$result3 = mysqli_query($conn, $query3);
							$resultCheck3 = mysqli_num_rows($result3);
							if ($resultCheck3 == 0) {
								$sql="INSERT INTO book_author (author, book) 
  									VALUES('$newBookAuthor', '$newBookTitel');";
  									mysqli_query($conn, $sql); 
							}

							
							
				       		}else{				            
				       		echo "
				            <div class='info_upload'>
				            	<p>Sorry, something went wrong, please try again.</p>
				            </div>"
				            ;
				        }
  			
		}
	}

	?>
	</main>
	<?php include'../config/footer.php';  ?>
	
</body>
</html>
