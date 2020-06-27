<?php 
	session_start();

	// variable declaration
	$firstname = "";
	$lastname = "";
	$username = "";
	$email    = "";
	$contact    = "";
	$address1   = "";
	$address2   = "";
	$avatar_path   = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$_SESSION['message'] = "";

	
	$db = mysqli_connect('localhost', 'root', '', 'accounts');
	$mysqli = new mysqli("localhost", "root", "", "accounts");

	
	if (isset($_POST['reg_user'])) {
		
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$contact = mysqli_real_escape_string($db, $_POST['contact']);
		$address1= mysqli_real_escape_string($db, $_POST['address1']);
		$address2= mysqli_real_escape_string($db, $_POST['address2']);
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $_SESSION['username'] = $username;
		
		if (empty($firstname)) { array_push($errors, "firstname is required"); }
		if (empty($lastname)) { array_push($errors, "lastname is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($contact)) { array_push($errors, "Contact is required"); }
		if (empty($address1)) { array_push($errors, "Address 1 is required"); }
		if (empty($address2)) { array_push($errors, "Address 2 is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
       
        
        
 
		}
		//make sure the file type is image
        if (preg_match("!image!",$_FILES['avatar']['type'])) {
            
            //copy image to images/ folder 
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                $_SESSION['avatar'] = $avatar_path;

                //insert user data into database
                $sql = 
                "INSERT INTO userdata ( avatar) "
                . "VALUES ( '$avatar_path')";
                
                //check if mysql query is successful
                if ($mysqli->query($sql) === true){
                   
                    //redirect the user to welcome.php
                    header("location: index1.php");
                 }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
            }
            else {
                $_SESSION['message'] = 'File upload failed!';
            }
        }
        else {
            $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
        }
    
    
//if ($_SERVER["REQUEST_METHOD"] == "POST")

		
		if (count($errors) == 0) {
			
			$query = "INSERT INTO userdata (firstname, lastname, username, email, contact, address1, address2,avatar, password) 
					  VALUES('$firstname', '$lastname', '$username', '$email', '$contact', '$address1','$address2','$avatar_path', '$password_1')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index1.php');
		}

	}

	

	
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			
			$query = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location:index1.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
		
	

?>