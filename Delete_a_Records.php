
//Code for Deleting a Record
<?php
$servername="localhost:18000";
$username="root";
$password="";
$db="crud";
$conn = mysqli_connect($servername, $username, $password,$db);
if($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else
{
echo "Connected successfully</br>";
}
$id=$_GET['id'];
$query="delete from Emp_Address where id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0; url=http:
    <?php
}
else
{
    echo "<font color='red'>Sorry, Delete process failed";
} 
?>
