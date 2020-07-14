<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lemonada|Montserrat+Alternates&display=swap" rel="stylesheet">

      
    <!--icon-->
    <link rel="icon" href="resources/favicon.ico">
      
      
      
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
    <title>Passmeabook</title>
  </head>
  <body>
    
      
      <!-- nav bar-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#home">passmeabook</a><br>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categories.php">categories</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal">sell</button>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
      
      
      
      
      
      

<!-- marquee--><section id="home">
<div class="container-fluid" style="background-color: darkkhaki;">
  <div class="row">
    <div class="col-sm" style="height: 200px;font-family: 'Lemonada', cursive;font-stretch: expanded">
      <h1 style="margin-top: 20%;margin-left: 25px">passmeabook</h1>
    </div>
    <div class="col-sm">
	<?php
session_start();


$srch='';
$rows='';
$db = mysqli_connect('localhost', 'root', '', 'pmapp');

$srch=$_SESSION['srch']; 
$sql = "SELECT *FROM bookin WHERE bookname='$srch' OR authorname='$srch'";
$query = mysqli_query($db,$sql);
$result=mysqli_num_rows($query);
if($result==0)
{
	echo"Sorry,No Result Found ";
}
else
{
	while($rows = mysqli_fetch_array($query))
	{
		echo'<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" alt="Image" style="width:20cm,height:60cm">';
	}
}
?>
		
     
    </div>
  </div>
</div></section>
      
      <!-- alert -->
  <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-size: 20px">
  <center><strong>Hey newbie</strong> Remember the ID of book if you wanna buy it.</center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>          
      

<!-- book portifolio-->
<?php



$srch='';
$rows='';
$db = mysqli_connect('localhost', 'root', '', 'pmapp');

$srch=$_SESSION['srch']; 
$sql = "SELECT *FROM bookin WHERE bookname='$srch' OR authorname='$srch'";
$query = mysqli_query($db,$sql);
$result=mysqli_num_rows($query);
if($result==0)
{
	echo"Sorry,No Result Found ";
}
else
{
	while($rows = mysqli_fetch_array($query))
	{
		echo"<section id='shop'>";
		
		echo"<div class='container-fluid'>";
		echo"<div class='row'>";
	    echo"<div class='col col-lg-4 col-md-2'>";
		echo"<div class='card' style='width: 18rem'>";
		echo'<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" alt="Image" >';
		echo"<div class='card-body'>";
        echo"<h5 class='card-title'>".$rows['bookname']."</h5>";
		echo"<p class='card-text'>".$rows['description']."</P>";
		echo"<p>".$rows['dprice']."</p>";
		echo"<center><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal2'>buy</button></center>";
	    echo"</div>";
		echo"</div>";
		echo"</div>";
		
		
	    echo"<div class='col col-lg-4 col-md-2'>";
		echo"<div class='card' style='width: 18rem'>";
		echo'<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" alt="Image" >';
		echo"<div class='card-body'>";
        echo"<h5 class='card-title'>".$rows['bookname']."</h5>";
		echo"<p class='card-text'>".$rows['description']."</P>";
		echo"<p>".$rows['dprice']."</p>";
		echo"<center><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal2'>buy</button></center>";
	    echo"</div>";
		echo"</div>";
		echo"</div>";
		
		
	    echo"<div class='col col-lg-4 col-md-2'>";
		echo"<div class='card' style='width: 18rem'>";
		echo'<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" alt="Image" >';
		echo"<div class='card-body'>";
        echo"<h5 class='card-title'>".$rows['bookname']."</h5>";
		echo"<p class='card-text'>".$rows['description']."</P>";
		echo"<p>".$rows['dprice']."</p>";
		echo"<center><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal2'>buy</button></center>";
	    echo"</div>";
		echo"</div>";
		echo"</div>";
		echo"</div>";
		echo"</div>";
		
		echo"</section>";
	}
}

?>
 
      
      
      
      
      
      
      
  <!-- The Modal for sell -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">please enter the following details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="sell.php" method="POST">
        
       
              
              
              <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Yname">your name</label>
                        <input type="text" name="Yname" class="form-control" id="Yname" placeholder="Adarsh kunwar" required style="float: left">
                </div>
                  <div class="form-group col-md-6">
                      <label for="Bname">your book name</label>
                      <input type="text" name="Bname" class="form-control" id="Bname" placeholder="rich dad poor dad" required style="float: left">
                </div>
            </div>
              <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Aname">author name</label>
                        <input type="text" name="Aname" class="form-control" id="Aname" placeholder="Robert T. Kiyosaki" required style="float: left">
                </div>
                  <div class="form-group col-md-6">
                      <label for="Pdate">published year</label>
                      <input type="number" name="Pyear" min="1900" max="2020"
    class="form-control" id="Pdate" placeholder="rich dad poor dad" required style="float: left">
                </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Mrp">Marked price</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nrs</span>
                            </div>
                            <input type="text" name="Mpr" class="form-control" placeholder="600" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                </div>
                   <div class="form-group col-md-6">
                        <label for="Drp">Desired prise</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nrs</span>
                            </div>
                            <input type="text" name="Dpr" class="form-control" placeholder="600" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                
              </div>    

              
               <div class="form-row">
                    <div class="form-group col-md-6">
                                <label for="Cbook">My book is</label>
                                    <select class="custom-select" name="Cob" id="Cbook" required>
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
                            <input type="text" name="Cno" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
              </div>  
              
              
              
              <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="Add1">Address 1</label>
                        <input type="text" name="Add1" class="form-control" id= "Add1" placeholder="Butwal-10, devinagar" required style="float: left">
                    </div>
                  <div class="form-group col-md-6">
                      <label for="Add2">Address 2</label>
                      <input type="text" name="Add2" class="form-control" id="Add2" placeholder="Dhaulagiri path" required style="float: left">
                </div>
                  <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                         </div>
                  </div>
                   </div>
                   
                      <button type="submit" name="btn_sell" class="btn btn-primary" dismiss="modal">Sell</button>
                   
              </div>
    </form>
    
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
        </div>
      </div>
      </div>
      
      
      
        <!-- The Modal for sell -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">please enter the following details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="buy.php" method="post" enctype="multipart/form-data">
        
       
              
              
              <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Yname">your name</label>
                        <input type="text" name="name" class="form-control" id="Yname" placeholder="Adarsh kunwar" required style="float: left">
                </div>
                  <div class="form-group col-md-6">
                      <label for="I-D">ID for desired book</label>
                      <input type="text" name="id" class="form-control" id="I-D" placeholder="111011" required style="float: left">
                </div>
            </div>
              
               <div class="form-row">
                    <div class="form-group col-md-6">
                                <label for="Cbook">I want</label>
                                    <select class="custom-select" name="type" id="Cbook" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="HD">Home delivery</option>
                                            <option value="NHD">to get book myself</option>
                                    </select>
                        </div>
                    <div class="form-group col-md-6">
                        <label for="CN">contact no</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+977</span>
                            </div>
                            <input type="text" name="Ph" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
              </div>  
              
              
              
              <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="Add1">Address 1</label>
                        <input type="text" name="addr1" class="form-control" id= "Add1" placeholder="Butwal-10, devinagar" required style="float: left">
                    </div>
                  <div class="form-group col-md-6">
                      <label for="Add2">Address 2</label>
                      <input type="text" name="addr2" class="form-control" id="Add2" placeholder="Dhaulagiri path" required style="float: left">
                </div>
                   </div>
                   
                      <button type="submit" name="btn_buy" class="btn btn-primary" dismiss="modal">buy</button>
              </div>
    </form>
    
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
        </div>
      </div>
      </div>
      
      

</body>
</html>