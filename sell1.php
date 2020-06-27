<?php
	session_start();

	// variable declaration
	$sellername = "";
	$bookname = "";
	$authorname = "";
	
	$markedprice    = "";
	$desiredprice  = "";
	$quality   = "";
	$sellercontact  = "";
	$selleraddress1  = "";
	$selleraddress2 = "";
	$book = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	
	$db = mysqli_connect('localhost', 'root', '', 'accounts');

	
	if (isset($_POST['sellbook'])) {
		
		$sellername = mysqli_real_escape_string($db, $_POST['sellername']);
		$bookname = mysqli_real_escape_string($db, $_POST['bookname']);
                $authorname = mysqli_real_escape_string($db, $_POST['authorname']);
		
		$markedprice= mysqli_real_escape_string($db, $_POST['markedprice']);
		$desiredprice= mysqli_real_escape_string($db, $_POST['desiredprice']);
		$quality = mysqli_real_escape_string($db, $_POST['quality']);
		$sellercontact = mysqli_real_escape_string($db, $_POST['sellercontact']);
		$selleraddress1 = mysqli_real_escape_string($db, $_POST['selleraddress1']);
		$selleraddress2 = mysqli_real_escape_string($db, $_POST['selleraddress2']);
		$book = mysqli_real_escape_string($db, $_POST['book']);

		
		if (empty($sellername)) { array_push($errors, "seller name is required"); }
		if (empty($bookname)) { array_push($errors, "Book name is required"); }
		if (empty($authorname)) { array_push($errors, "Author name is required"); }
		
		if (empty($markedprice)) { array_push($errors, "Marked Price is required"); }
		if (empty($desiredprice)) { array_push($errors, "Desired Price is required"); }
		if (empty($quality)) { array_push($errors, "Quality is required"); }
		if (empty($sellercontact)) { array_push($errors, "Contact No is required"); }
		if (empty($selleraddress1)) { array_push($errors, "Address 1  is required"); }
		if (empty($selleraddress2)) { array_push($errors, " Address 2is required"); }
		if (empty($book)) { array_push($errors, " book is required"); }

		
		
		if (count($errors) == 0) {
			
			$query = "INSERT INTO sell (sellername, bookname, authorname, markedprice, desiredprice, quality, sellercontact,selleraddress1,selleraddress2,book) 
					  VALUES('$sellername', '$bookname', '$authorname', '$markedprice', '$desiredprice','$quality', '$sellercontact', '$selleraddress1', '$selleraddress2')";
			mysqli_query($db, $query);

			$_SESSION['bookname'] = $bookname;
			$_SESSION['success'] = "You are now logged in";
		
		}

	}

	

	

?>