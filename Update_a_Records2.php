//Code for Updating a Record
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update a Record</title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/button.min.css" rel="stylesheet"/>
     
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
     
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
     
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</head>
 
<body>
    <h1 class="text-success text-center">Update a Record</h1>
    <div class="container">
        <form action="" method="GET" class="was-validated">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id"
                value="<?php echo $_GET['id'];?>" name="id" required>
                <div class="valid-feedback">Valid</div>
            </div>
             
            <div class="form-group">
                <label for="empid">Emp_Id:</label>
                <input type="number" class="form-control" id="empid"
                value="<?php echo $_GET['empid'];?>" name="empid" required>
                <div class="valid-feedback">Valid</div>
  
            </div>
             
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name"
                value="<?php echo $_GET['name'];?>"  name="name" required>
                <div class="valid-feedback">Valid</div>
            </div>
 
             <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email"
                value="<?php echo $_GET['email'];?>"  name="email" required>
                <div class="valid-feedback">Valid</div>
            </div>
             <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="gender" class="form-control" id="gender"
                value="<?php echo $_GET['gender'];?>"  name="gender" required>
                <div class="valid-feedback">Valid</div>
            </div>
             <div class="form-group">
                <label for="dateofjoining">Date_Of_Joining:</label>
                <input type="dateofjoining" class="form-control" id="dateofjoining"
                value="<?php echo $_GET['dateofjoining'];?>"  name="dateofjoining" required>
                <div class="valid-feedback">Valid</div>
            </div>
            <input type="submit" name="submit" class="ui small red button" value="Update"/>
        </form>
    </div>
<?php 
$servername="localhost:18000";
$username="root";
$password="";
$db="crud";
$conn = mysqli_connect($servername, $username, $password,$db);
if($conn->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}
else
{
echo "";
}
?> 
<?php
if(isset($_GET['submit']))
{
  $id=$_GET['id'];
  $empid=$_GET['empid'];
  $name=$_GET['name'];
  $email=$_GET['email'];
  $gender=$_GET['gender'];
  $dateofjoining=$_GET['dateofjoining'];
  $query="update Emp_Details set name='$name', email='$email', gender='$gender' where id='$id'";
  $data=mysqli_query($conn,$query);
  if($data)
  {
    echo "<font color='green'><center>Record  Updated Successfully.</center> <center><a href='Print_a_Records2.php'>Check Updated List Here</a></center>";
  }
  else
  {
    echo "<center>Record Not Updated.</center>";
    
  }
}
else
{
  echo "<font color='blue'><center>Click on Update Button to save the changes</center>";
}
?>
</body>
</html>