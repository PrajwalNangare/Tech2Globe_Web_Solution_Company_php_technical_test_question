//Database Related Code
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

//Code for Creating a database
$query="create database crud";
if(mysqli_query($conn, $query))
{
    echo "database created";
}
else
{
    echo "database not created";
}

//Code For Creating a table
$query1="create table Emp(ID int(10) autoincrement, Name varchar(60) primary key, Email varchar(100), Gender varchar(60));";
mysqli_query($conn,$query1);
if(mysqli_query($conn,$query1))
{
    echo "table is created successfully";
}
else
{
    echo "table is not created";
}







//Code of data insertion into database 
<html>
<head>
</head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/button.min.css" rel="stylesheet"/>
<style>
center
{
    color:blue;
}
</style>
<body>
</body>
</html>
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
echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Form</title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     
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
    <h1 class="text-success text-center">Inserting A Value into Database</h1>
    <div class="container">
        <form action="" method="GET" class="was-validated">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id"
                        name="id" required>
                <div class="valid-feedback">Valid</div>
            </div>
             
             
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="class"
                     name="name" required>
                <div class="valid-feedback">Valid</div>
            </div>
             <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="class"
                     name="email" required>
                <div class="valid-feedback">Valid</div>
            </div>
            
             <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" id="class"
                     name="gender" required>
                <div class="valid-feedback">Valid</div>
            </div>
            <input type="submit" name="submit" class="ui small red button" value="Add"/>
        </form>
    </div>
<?php
if(isset($_GET['submit']))
{
    $id=$_GET['id'];
    $name=$_GET['name'];
    $email=$_GET['email'];
    $gender=$_GEt['gender'];
    if($id!="" && $name!="" && $email!="" && $gender!="")
    {
        $query="insert into Emp(id,name,email,gender)values('$id','$name','$email','gender')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "<center>Data inserted into Database</center>";
        }
    }
    else
    {
        echo "<center>All fields are required</center>";
    }
}
?>
</body>
</html>
