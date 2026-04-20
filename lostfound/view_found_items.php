<?php
include("includes/db.php");

$sql = "SELECT * FROM found_items";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Found Items</title>
</head>

<body>

<h2>Found Items</h2>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<div style="border:1px solid black; width:300px; padding:10px; margin:10px;">

<h3><?php echo $row['item_name']; ?></h3>

<p><?php echo $row['description']; ?></p>

<p>Location: <?php echo $row['location_found']; ?></p>

<p>Date: <?php echo $row['date_found']; ?></p>

<p>Contact: <?php echo $row['contact']; ?></p>

<img src="uploads/<?php echo $row['image']; ?>" width="200">

</div>

<?php
}
?>

</body>
</html>