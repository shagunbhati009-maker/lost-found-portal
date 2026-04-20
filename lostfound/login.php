<?php
session_start();
include("includes/db.php");

if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row)
{
    if($password == $row['password'])
    {
        $_SESSION['user'] = $email;
        header("Location: index.php");
    }
    else
    {
        echo "Password Incorrect";
    }
}
else
{
    echo "User not found";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
</head>

<body>

<h2>User Login</h2>

<form method="POST">

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button type="submit" name="login">Login</button>

</form>

</body>
</html>