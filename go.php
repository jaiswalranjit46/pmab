<?php

if (isset($_POST['login_user'])) {
$srch='';
$rows='';
$db = mysqli_connect('localhost', 'root', '', 'accounts');
$srch = mysqli_real_escape_string($db, $_POST['username']);

$sql = "SELECT *FROM userlogin WHERE username='$srch'";
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
	  echo'<img src="data:image/jpeg;base64,'.base64_encode($rows['avatar'] ).'" alt="Image" style=" height:60px; width:60px">';   
	}
}
}

?>
