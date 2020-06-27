<?php


include 'cons.php';

$sqli = "SELECT * FROM buyerinfo"; 
$sqli1 = "SELECT * FROM sellerinfo"; 
$result = mysqli_query($conn, $sqli); 
$result1 = mysqli_query($conn, $sqli1); 
$row = mysqli_num_rows ($result);
$row1 = mysqli_num_rows ($result1);
$row;
echo "total no of rows: ".$row1;
echo "<table>";
 echo "<tr>";
echo "<td>Seller Name</td>";
 echo "<td>Seller Addreass 1</td>";
 echo "<td>Seller Address2</td>";
 echo "<td>Seller Contact</td>";
 echo "<td>Created At</td>";
 echo "</tr>";
 while($row = mysqli_fetch_array($result)){ 
 echo "<tr>"; 
 echo "<td>" . $row['username']."</td>";
 echo "<td>" . $row['address1']."</td>";
 echo "<td>" . $row['address2']."</td>";
 echo "<td>" . $row['contact']."</td>";
 echo "<td>" . $row['created_at']."</td>";
 echo "</tr>";
 }
echo "</table>";
echo "<table>";
 echo "<tr>";
 echo "<td>Seller Name</td>";
 echo "<td>Seller Addreass 1</td>";
 echo "<td>Seller Address2</td>";
 echo "<td>Seller Contact</td>";
 echo "<td>Created At</td>";
 echo "</tr>";
 while($row1 = mysqli_fetch_array($result1)){ 
 echo "<tr>"; 
 echo "<td>" . $row1['sellername']."</td>";
 echo "<td>" . $row1['sellerAddress1']."</td>";
 echo "<td>" . $row1['sellerAddress2']."</td>";
 echo "<td>" . $row1['contact']."</td>";
 echo "<td>" . $row1['bookname']."</td>";
 echo "</tr>";
 }
echo "</table>";
?>