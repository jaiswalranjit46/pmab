<?php

    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localhost", "root", "", "accounts");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  
   
       
    
        //path were our avatar image will be stored
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
        
        //make sure the file type is image
        if (preg_match("!image!",$_FILES['avatar']['type'])) {
            
            //copy image to images/ folder 
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                $_SESSION['avatar'] = $avatar_path;

                //insert user data into database
                $sql = 
                "INSERT INTO users ( avatar) "
                . "VALUES ( '$avatar_path')";
                
                //check if mysql query is successful
                if ($mysqli->query($sql) === true){
                   
                    //redirect the user to welcome.php
                   // header("location: index1.php");
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
    }
    
//if ($_SERVER["REQUEST_METHOD"] == "POST")
 

?>

<div class="body-content">
  <div class="module">
    <h1>Upload a avatar</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      
     
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Upload" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>