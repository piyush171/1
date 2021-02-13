<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Message=$_POST['Message'];

$con=mysqli_connect("localhost","root");

mysqli_select_db($con,"contact");

$q="insert into piyush(Name,Email,Phone,Message)values('$Name','$Email','$Phone','$Message')";

$result=mysqli_query($con,$q);

if($result)
{
	echo "Your enquiry will be finished we will contact you soon.Thank you for giving us time !!!!";
}
?>