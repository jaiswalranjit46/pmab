<?php


include 'cons.php';

$sqli = "SELECT * FROM bookdata"; 
$result = mysqli_query($conn, $sqli); 
$row1 = mysqli_num_rows ($result);
$row;

echo "total no of rows: ".$row1;

echo "<table>";
 echo "<tr>";
echo "<td>ID</td>";
echo "<td>Book Name</td>";
 echo "<td>Author Name</td>";
 echo "<td>Published Year</td>";
 echo "<td>Seller Nick Name</td>";
 echo "<td>Buyer Nick Name</td>";
 echo "<td>Date of Addition</td>";
 echo "<td>Date of Submission</td>";
 echo "</tr>";
 while($row = mysqli_fetch_array($result)){ 
 echo "<tr>"; 
 echo "<td>" . $row['id']."</td>";
 echo "<td>" . $row['bookname']."</td>";
 echo "<td>" . $row['authorname']."</td>";
 echo "<td>" . $row['publishedyear']."</td>";
 echo "<td>" . $row['sellerNickName']."</td>";
 echo "<td>" . $row['buyerNickName']."</td>";
 echo "<td>" . $row['dateofAddition']."</td>";
  echo "<td>" . $row['dateofSubbmission']."</td>";

echo "</tr>";
 }
echo "</table>"
?>