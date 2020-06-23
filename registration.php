<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo"connection sucessful";
}else{
	echo"no connection";
}
mysqli_select_db($con,'pmab');
$firstname=$_POST['fName'];
$lastname=$_POST['lName'];
$nickname=$_POST['nName'];
$contactno=$_POST['cNo'];
$address1=$_POST['add1'];
$address2=$_POST['add2'];
$password=$_POST['pass1'];
$confirmpassword=$_POST['pass2'];

$q="select*from pmab_login where Your First Name='$firstname' && New Password='$password'&& Your Last Name='$lastname'&& Your Nick Name='$nickname'&& Contact No='$contactno'&& Address1='$address1'&& Address2='$address2'&& Confirm Password='$confirmpassword'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rowss($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into pmab_login(Your First Name,Your Last Name,Your Nick Name,Contact No,Address1,Address2,New Password,Confirm Password)values('$firstname','$lastname','$password','$nickname','$contactno','$address1','$address2','$password','$confirmpassword')";
	 mysqli_query($con,$qy);
}
?>