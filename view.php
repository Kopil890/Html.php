<?php
$conn = mysqli_connect("0.0.0.0","root","root","activedb");

if(isset($GET['deleteid'])){
$deleteid = $_GET['deleteid'];
$sql = "DELETE FROM user WHERE id = $deleteid";
if(mysqli_query($conn,$sql) == TRUE){
echo "header('location:view.php')";
}

}

?>




<html>
<head>
<title>personal info</title>
</head>
<body>
<?php

$sql = "SELECT * FROM user";
$query = mysqli_query($conn,$sql);

echo "<table>
<h3>User Information</h3>
<tr>
  <th>id</th>
  <th>username</th>
  <th>email</th>
  <th>password</th>
  <th>Action</th>
</tr>";
while($data = mysqli_fetch_assoc($query)){

$id = $data['id'];
$username = $data['username'];
$email = $data['email'];
$password = $data['password'];
echo "<tr>
   <td>$id</td>
   <td>$username</td>
   <td>$email</td>
   <td>$password</td>
<td>
<span style='background: green;'>
<a href='edit.php?id=$id' style='color: white;'>
Edit
</a>
</span>

<span style='background: red;color: white;'>
<a href='view.php?deleteid=$id' style='color:white'>
Delete
</a>
</span>

</td>
</tr>";
}
?>
</body>
</html>
