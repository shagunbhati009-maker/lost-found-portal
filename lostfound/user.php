<?php
include("includes/db.php");

if(isset($_POST['register']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name,email,mobile,password) 
VALUES ('$name','$email','$mobile','$password')";

if(mysqli_query($conn,$sql))
{
echo "Registration Successful!";
}
else
{
echo "Error: " . mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
</head>

<body>

<h1>User Registration</h1>

<form method="POST">

Name:<br>
<input type="text" name="name" required><br><br>

Email:<br>
<input type="email" name="email" required><br><br>

Mobile:<br>
<input type="text" name="mobile" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<input type="submit" name="register" value="Register">

</form>

</body>
</html>