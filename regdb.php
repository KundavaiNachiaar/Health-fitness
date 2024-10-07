<html><body>
<?php

$n=$_GET["name"];
$a=$_GET["age"];
$g=$_GET["gender"];
$h=$_GET["ht"];
$w=$_GET["wt"];
$ad=$_GET["addr"];
$m=$_GET["mode"];
$d=$_GET["dur"];

$conn = mysqli_connect("localhost","root","","gym");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO `details`(`uid`, `name`, `age`, `gender`, `height`, `weight`, `address`, `mem_mode`, `duration`) VALUES 
(NULL,'$n','$a','$g','$h','$w','$ad','$m','$d')";
if ($conn->query($sql) === TRUE) {
    $s="SELECT uid FROM details WHERE uid=(SELECT max(uid) FROM details);";
    $res=$conn->query($s);
    while ($row = mysqli_fetch_array($res))
    {
      echo "REGISTRATION IS SUCCESSFULL ". "<strong> YOUR UID IS : </strong> " .$row['uid'] . "  <i><strong>(kindly use your uid to login)</strong></i>";
    }
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>
