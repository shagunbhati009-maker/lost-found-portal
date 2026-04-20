<?php
include("includes/db.php");

if(isset($_POST['register']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
mysqli_query($conn,$sql);

echo "Registration Successful";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
</head>

<body>

<h2>User Registration</h2>

<form method="POST">

Name:<br>
<input type="text" name="name" required><br><br>

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button type="submit" name="register">Register</button>

</form>

</body>
</html>