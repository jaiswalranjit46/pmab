
<?php

session_start(); 

include 'cons.php';
	$db = mysqli_connect('localhost', 'root', '', 'accounts');
	$username =  $_SESSION['username'];
    
if (isset($_POST['buynow']))
	  {
	$sqli = "SELECT * FROM userdata WHERE username='$username'"; 
	$result = mysqli_query($conn, $sqli); 
	$row1 = mysqli_num_rows ($result);
    $row;
    echo "<table>";
    echo "<tr>";
    echo "<td>Buyer Name</td>";
    echo "<td>Buyer Address1</td>";
    echo "<td>Buyer Address2</td>";
	echo "<td>Buyer Contact No.</td>";
	echo "<td>Buyer Date&Time.</td>";
    echo "</tr>";
    while($row = mysqli_fetch_array($result)){ 
    echo "<tr>"; 
    echo "<td>" . $row['username']."</td>";
    echo "<td>" . $row['address1']."</td>";
    echo "<td>" . $row['address2']."</td>";
	echo "<td>" . $row['contact']."</td>";
	echo "<td>" . $row['created_at']."</td>";
	$username="root";

$hostname="localhost";
$database="accounts";

$sconn = mysqli_connect($hostname, $username)
  or die("Connection Failed");

$dbconn = mysqli_select_db($sconn, $database)
  or die("DB not selected");
  $user=$row['username'];
  $add1=$row['address1'];
  $add2=$row['address2'];
  $cont=$row['contact'];
  $created=$row['created_at'];
 

$sql = "INSERT INTO buyerinfo (username, address1,address2,contact,created_at)
        VALUES ('$user', '$add1', '$add2', '$cont', '$created')";

if ($sconn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	 echo "</tr>";
      }
echo "</table>";
     }
	
	if (isset($_POST['buynow'])) {
$srch='';
$rows='';
$srch= $_SESSION['srch'];
$db = mysqli_connect('localhost', 'root', '', 'pmapp');


$sql = "SELECT *FROM bookin WHERE bookname='$srch' OR authorname='$srch'";
$query = mysqli_query($db,$sql);
$result=mysqli_num_rows($query);
if($result==0)
{
	echo"Sorry,No Result Found ";
}
else
	echo"<br>";
{   echo "<table>";
    echo "<tr>";
    echo "<td>Seller Name</td>";
    echo "<td>seller Address1</td>";
    echo "<td>seller Address2</td>";
	echo "<td>contact</td>";
    echo "<td>Book Name</td>";
    echo "</tr>";
	while($rows = mysqli_fetch_array($query))
	{
	echo "<tr>"; 
    echo "<td>".$rows['sellerNickName']."</td>";
    echo "<td>".$rows['address1']."</td>";
    echo "<td>".$rows['address2']."</td>";
    echo "<td>".$rows['contact']."</td>";
	echo "<td>".$rows['bookname']."</td>";
	$username="root";

$hostname="localhost";
$database="accounts";

$sconn = mysqli_connect($hostname, $username)
  or die("Connection Failed");

$dbconn = mysqli_select_db($sconn, $database)
  or die("DB not selected");
  $seller= $rows['sellerNickName'];
  $addr1= $rows['address1'];
  $addr2= $rows['address2'];
  $conta= $rows['contact'];
  $book= $rows['bookname'];
 

$sql = "INSERT INTO sellerinfo (sellername, sellerAddress1,sellerAddress2,contact,bookname)
        VALUES ('$seller', '$addr1', '$addr2', '$conta', '$book')";

if ($sconn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('location:buy.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


	echo "<tr>";
	
 
	}
	echo "</table>";
	
}	
	}
	
   
	 ?>
