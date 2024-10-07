<html><body>
<?php

$u=$_GET["uid"];
$c=$_GET["card"];
$e=$_GET["exp"];
$c=$_GET["cvv"];
$n=$_GET["name"];
$m=$_GET["meth"];

$conn = mysqli_connect("localhost","root","","gym");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO `finance`(`uid`, `card_number`, `expiry_date`, `cvv`, `cardholder`, `mem_plan`) VALUES 
(NULL,'$u','$c','$e','$c','$n','$m')";
if ($conn->query($sql) === TRUE) {
    echo  "<script>alert('Thank you for your payment. Please visit our gym for access to our services.');</script>";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>
