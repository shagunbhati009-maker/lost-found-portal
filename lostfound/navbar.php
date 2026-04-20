<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="index.php">Lost & Found Portal</a>

<div>

<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="search.php">Search Items</a>
</li>

<li class="nav-item">
<a class="nav-link" href="add_item.php">Report Item</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>

<?php if(isset($_SESSION['user'])) { ?>

<li class="nav-item">
<a class="nav-link" href="logout.php">Logout</a>
</li>

<?php } else { ?>

<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="register.php">Register</a>
</li>

<?php } ?>

</ul>

</div>

</div>
</nav>
