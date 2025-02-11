<?php

$phone=$_POST['phone'];
$name=$_POST['name'];
$event=$_POST['event'];
$email=$_POST['email'];
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $conn = mysqli_connect("localhost","root","","event");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO submit VALUES
 ( '$name', '$email', $phone,'$event')";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
}


?>