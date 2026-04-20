<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Lost Items</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include("navbar.php"); ?>

<h2>Search Lost Items</h2>

<form method="GET">
    Enter Item Name:
    <input type="text" name="search">

    <button type="submit">Search</button>
</form>

<br>

<?php

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $query = "SELECT * FROM found_items WHERE item_name LIKE '%$search%'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<div style='border:1px solid #ccc;padding:15px;margin:15px;width:300px;background:#f9f9f9;'>";

        echo "<h3>".$row['item_name']."</h3>";

        echo "<p>".$row['description']."</p>";

        echo "<img src='uploads/".$row['image']."' width='150'><br><br>";

        echo "<a href='delete_item.php?id=".$row['id']."&type=lost' style='color:red;'>Delete Item</a>";

        echo "</div>";
    }
}
else
{
    echo "<h3>No items found</h3>";
}
}

?>

</body>
</html>