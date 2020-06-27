<?php 
    
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_REQUEST['logout'])) {
		
		unset($_SESSION['avatar']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="coding.css">
  <link rel="stylesheet" type="text/css" href="css/index(1).css">
  <title>books</title>
  <meta charset="utf-8" content="width = device-width, initial-scale = 1.0">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
   <style>
#section1 {
  margin-right:10px;	
  height: 120px;
  background-color:#474e5d;
  margin-bottom:10Px;
  color: white;
}

#section2 {
  margin-right:10px;	
  height: 120px;
  background-color:#474e5d;
  margin-bottom:40Px;
  color: white;
}
.cont { 
  height: 100vh;


}
.can{
	margin-left:20px;
	
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}


</style>
  </head>
<body>
<div class="cont">
    <!-- navbar -->

      <nav class=" navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
     <img src="Pmab.png" width="160"height="50">
	 
<ul class="navbar-nav ml-auto">

<li ><a href="#">Home</a></li>
<li ><a href="#" >Categorie</a></li>
<li ><a href="comming soon.html" >Events</a></li>
<li ><a href="comming soon.html" >Achivemet</a></li>
<li ><a href="faq.php" >FAQ</a></li>
<li ><a href="aboutus.html" >About Us</a></li>

<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">
<img src="<?= $_SESSION['avatar'] ?>"  width="78"height="50" class="avatar">
<br />
</a>
    <div class="dropdown-content">
      <a href="form.php">MyActivity</a>
      <a ><form action="" method="POST">
	  <input type="submit" value="logout" name="logout">
	  </form></a>
    </li>
</ul>
	
</nav> 






<!-- main section -->



<div class="container-fluid">
      <div class="outer">
        <div class="details">
          <h1>read what you need</h1>
          <h2>
           <div class="input-group mb-3">
            <form class="form-inline" role= "form" action="search1.php" method="POST">
             <input type="text" class="form-control-lg" placeholder="search..." name="search_1"style="width: 590px; margin-right: -10px;">
              <div class="input-group-append">
                <button class="btn-lg btn-success" type="submit" name="search_2" >search</button>
              </div>
              </form>
            </div>
             <div style="color:white; font-size: 20px;"> 
            I prefer to <a type="button" data-toggle="modal" data-target="#staticBackdrop" style="color: green; text-decoration: none" >sell instead </a>
          </div></h2>
        </div>
      </div>
    </div>
	
	</div>
<div class="can">
<h3>    Popular Now</h3>
<div class="main" id="section1">
  <h2>Section 1</h2>
  </div>
  <h3>    Based on Your Past Activity</h3>
<div class="main" id="section2">

  <h2>Section 2</h2>
  </div>
</div>






<form  method="POST" action="sell1.php">
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          



                       
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Yname">your name</label>
                                <input type="text" class="form-control"  name="sellername" id="Yname" placeholder="Adarsh kunwar" required style="float: left">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Bname">your book name</label>
                                <input type="text" class="form-control" name="bookname" id="Bname" placeholder="rich dad poor dad" required style="float: left">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Aname">author name</label>
                                <input type="text" class="form-control"  name="authorname" id="Aname" placeholder="Robert T. Kiyosaki" required style="float: left">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Pdate">published year</label>
                                <input type="date" class="form-control" id="Pdate" placeholder="rich dad poor dad" required style="float: left">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Mrp">Marked price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nrs</span>
                                    </div>
                                    <input type="text" class="form-control" name="markedprice" placeholder="600" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Drp">Desired prise</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nrs</span>
                                    </div>
                                    <input type="text" class="form-control" name="desiredprice" placeholder="600" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Cbook">My book is</label>
                                <select class="custom-select" name="quality" id="Cbook" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="GAN">good as new</option>
                                    <option value="TBR">tattred but readable</option>
                                    <option value="none">few page missing...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="CN">contact no</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+977</span>
                                    </div>
                                    <input type="text" class="form-control" name="sellercontact" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Add1">Address 1</label>
                                    <input type="text" class="form-control" name="selleraddress1" id="Add1" placeholder="Butwal-10, devinagar" required style="float: left">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Add2">Address 2</label>
                                    <input type="text" class="form-control" id="Add2" name="selleraddress2" placeholder="Dhaulagiri path" required style="float: left">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"  name="book" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                             <form action="sell1.php" method="POST">
                            <input type="submit" value="Sell Now" name="sellbook">
							</form>
                        </div>
						




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>



</body>
</html>