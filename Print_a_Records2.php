
//Code for View a Record
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 class="text-success text-center">Display a Record Of Database</h1>
<div class="container">
</div>
</body>
</html>
<style>
table, th, td {
  border: 0.5px solid black;
  border-collapse: collapse;
  padding:10px;
  text-align:center;
    
} 
}
</style>
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
$query="select * from Emp_Details";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
    ?>
    <table class='table table-dark table-hover' width="255" class="scrolldown" border:2px solid red;>
      <tr>
        <th>ID</th>
        <th>Emp_ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>DateOfJoining</th>
        <th colspan="2">Operations</th>
      </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
      echo "<tr>
              <td>".$result['id']."</td>
              <td>".$result['empid']."</td>
              <td>".$result['name']."</td>
              <td>".$result['email']."</td>
              <td>".$result['gender']."</td>
              <td>".$result['dateofjoining']."</td>
              <td><a href='Update_a_Records2.php?id=$result[id]&empid=$result[empid]&name=$result[name]&email=$resukt[email]&gender=$result[gender]' class='btn btn-primary badge-pill' role='button' widyh='50%''>Edit</td>
              <td><a href='Delete_a_Records2.php?id=$result[id]' onclick='return checkdelete()' class='btn btn-danger badge-pill' role='button'>Delete</td>
          </tr>";
    }
}
else 
{
  echo "No Record found";
}
?>
</table>
<script>
function checkdelete()
{
  return confirm('Are you sure you want to delete this data???');
}
</script>







