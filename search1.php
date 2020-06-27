
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin-css.css">
</head>

<?php
session_start();

if (isset($_POST['search_2'])) {
$srch='';
$rows='';
$db = mysqli_connect('localhost', 'root', '', 'pmapp');
$srch = mysqli_real_escape_string($db, $_POST['search_1']);
$_SESSION['srch'] = $srch;
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
		echo"<div class='container'>";
        echo"<h2 class='h2'>".$rows['bookname']."</h2>";
		echo"<p>".$rows['description']."</P>";
		echo"<p>".$rows['dprice']."</p>";
		echo'<img src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" alt="Image" style=" height:200px; width:200px">';
        echo"<br>";		
	    echo"</div>";
	}
}
}
?>
<form action="buynow.php" method="POST">
	  <input type="submit" value="Buy Now" name="buynow">
	  </form>

</html>