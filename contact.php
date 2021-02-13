<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Description=$_POST['Password'];

$con=mysqli_connect("localhost","root");

mysqli_select_db($con,"pokemon");

$q="insert into Pokemon(Name,Email,Phone,Password)values('$Name','$Email','$Password','$Phone')";

$result=mysqli_query($con,$q);

if($result)
{
	echo "Your enquiry will be finished we will contact you soon";
}
?>