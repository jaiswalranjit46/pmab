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


    
	
	

	
	
	
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
      <script type="text/javascript" src="admin.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include 'cons.php'?>
	  
	  <style>
img {
  border-radius: 50%;
}

.padd {
	padding-left:120Px;
	padding-right:120Px;
	
	
}

.paddo {
	margin-left:150Px;
	margin-top:50Px;
	
	
}

.paddy {
	background-color:#D4D2D2;
	
}

.paddyi {
	padding-left:12Px;
	padding-right:12Px;
    padding-top:12Px;
    padding-bottom:12Px;
	
}
</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>
  <!-- this is left side -->
  
  <div class="paddo">
    <div class="tab">
	  <img src="<?= $_SESSION['avatar'] ?>"  width="200px" class="avatar">
      <button class="tablinks" onclick="openTab(event, 'dashboard')" id="defaultOpen">Profile</button>
      <button class="tablinks" onclick="openTab(event, 'orders')">Photo</button>
      <button class="tablinks" onclick="openTab(event, 'control')" >Activity</button>
      <button class="tablinks" onclick="openTab(event, 'user-data')">Payment Methods</button>
	  
    </div>
    <!-- this is right part -->
    <!-- this is dashboard  -->
    <div id="dashboard" class="tabcontent">
	<center>
	<div style="border:1px solid black;">
	<h1> Public Profile</h1>
	<div>
	Add Information about Yourself</div>
	</div>
	</center>
	<div class="padd">
    <h3>Basics:</h3>

     <form>
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="First Name">
	  </div>
	  <div class="form-group">
	  <input type="text" class="form-control" id="usr2" placeholder="Last Name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
  






    <div class="form-row">
      
      
      <div class="form-group col-md-6">

        <input type="submit" name="search-dash" value="save" class="btn btn-success">
      </div>
    </div>
</form>
</div>

    
</div>




<!-- this is orders part -->
<div id="orders" class="tabcontent">
<center>
<div style="border:1px solid black;">
	<h1> Photo</h1>
	<div>
	Add photo about Yourself for your profile</div>
	</div>
	</center>
	
	<div class="padd">
<h3>Image Preview </h3>

<div style="border:1px solid black;">
	<div class="paddyi">
	<div class="paddy">
	<center>
	<img src="<?= $_SESSION['avatar'] ?>"  width="250px" class="avatar">
	</center>
	</div>
	</div>
	</div>
	
	    <form class="form" action="profile.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      
     
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Upload" name="register" class="btn btn-block btn-primary" />
	  <br>
	  <br>
	 <center> <a href="index1.php">      <input type="button" value="save" class="boto" />  </a> </center>
    </form>
	
  </div>
 
</div>



<!-- this is control -->
<div id="control" class="tabcontent">



</div>



<!-- this is user-data -->
<div id="user-data" class="tabcontent">
 

</div>
</div>



   
</body>
</html> 
