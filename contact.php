<html>
<body>
<?php
$name=$_GET["name"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$event=$_GET["event-type"];
$message=$_GET["message"];
$conn = mysqli_connect("localhost","root","","event");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO contact VALUES
 ( '$name', '$email', $phone,'$event',$message')";
if ($conn->query($sql) === TRUE) {
 echo "We will contact you further";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>
