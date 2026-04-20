<!DOCTYPE html>
<html>

<head>
<title>Lost & Found Portal</title>

<style>

body{
font-family: Arial;
margin:0;
background:#f4f4f4;
}

.navbar{
background:#333;
padding:15px;
}

.navbar a{
color:white;
text-decoration:none;
margin:15px;
font-size:18px;
}

.navbar a:hover{
color:yellow;
}

.header{
text-align:center;
padding:60px;
background:#007BFF;
color:white;
}

.container{
text-align:center;
padding:40px;
}

</style>

</head>

<body>

<div class="navbar">

<a href="index.php">Home</a>
<a href="view_found_items.php">Found Items</a>
<a href="add_item.php">Report Item</a>
<a href="about.php">About</a>
<a href="contact.php">Contact</a>
<a href="login.php">Login</a>

</div>

<div class="header">

<?php include("navbar.php"); ?>

<h1>University Lost & Found Portal</h1>
<p>Helping students find their lost belongings</p>

</div>

<div class="container">

<h2>Welcome to the Lost & Found System</h2>

<p>
This portal helps students report lost items and find belongings
that have been found on campus.
</p>

</div>

</body>
</html>