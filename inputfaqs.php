<html>
<head>
<style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 20px ;
  font-size: 16px;
  cursor: pointer;
  margin:20px;
}
h2{
	color: #4CAF50;
}
/* Green */
.success {
  border-color: #4CAF50;
  color: green;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body><center>
<h1> Write Frequently Asked Question which you want to display </h1>
<form method="post">
 <h2>Write Faqs<h2><textarea name="text1" rows="10" cols=59></textarea><br>
 <h2>Write Answers</h2><textarea name="text2" rows="10" cols=59></textarea><br><br>
 <input type="submit"class="btn success"name="submi" rows="5" cols="5" value="Add Record">
 <input type="reset" class="btn success"name="reset" rows="5" cols="5" value="Clear Text">
</form>
</body></center>
<?php 
session_start();
// connection
$db = mysqli_connect('localhost', 'root', '', 'pmapp');
$errors = array();
$_SESSION['success'] = ""; 
if (isset($_POST['submi'])) {
$text1=mysqli_real_escape_string($db, $_POST['text1']);
$text2= mysqli_real_escape_string($db, $_POST['text2']);

if (empty($text1)) { array_push($errors, "Faqs is required"); }
if (empty($text2)) { array_push($errors, "Answer is required"); }
		
if (count($errors) == 0) {

$query="INSERT INTO faqs(faqs,answer) VALUES('$text1','$text2')";
mysqli_query($db, $query);
$_SESSION['faqs'] = $text1;
$_SESSION['success'] = "You are now logged in";
}}
?>