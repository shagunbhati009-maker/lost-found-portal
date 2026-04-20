<?php
include("includes/db.php");

/* DELETE ITEM */
if(isset($_GET['delete']))
{
$id = $_GET['delete'];

$delete_sql = "DELETE FROM found_items WHERE id='$id'";
mysqli_query($conn,$delete_sql);

echo "Item deleted successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Found Items</title>
</head>

<body>

<h1>Found Items</h1>

<?php

$sql = "SELECT * FROM found_items";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{

?>

<div style="border:1px solid black; padding:10px; margin:10px;">

<h3><?php echo $row['item_name']; ?></h3>

<p><b>Description:</b> <?php echo $row['description']; ?></p>

<p><b>Date Found:</b> <?php echo $row['date_found']; ?></p>

<p><b>Location:</b> <?php echo $row['location_found']; ?></p>

<a href="found_items.php?delete=<?php echo $row['id']; ?>">
<button>Delete</button>
</a>

</div>

<?php

}
}
else
{
echo "No items found.";
}

?>

</body>
</html>