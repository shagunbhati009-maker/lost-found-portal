<?php
session_start();

if(!isset($_SESSION['user']))
{
header("Location: login.php");
}
include("includes/db.php");

if(isset($_POST['submit']))
{
    $name = $_POST['item_name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $contact = $_POST['contact'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    $folder = "uploads/".$image;

    // Move uploaded image
    if(move_uploaded_file($temp,$folder))
    {
        $sql = "INSERT INTO found_items (item_name, description, location_found, date_found, contact, image)
        VALUES ('$name','$description','$location','$date','$contact','$image')";

        if(mysqli_query($conn,$sql))
        {
            echo "Item Added Successfully";
        }
        else
        {
            echo "Database Error";
        }
    }
    else
    {
        echo "Image Upload Failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Found Item</title>
</head>

<body>

<?php include("navbar.php"); ?>

<h2>Add Found Item</h2>

<form method="POST" enctype="multipart/form-data">

Item Name:<br>
<input type="text" name="item_name" required><br><br>

Description:<br>
<input type="text" name="description" required><br><br>

Location Found:<br>
<input type="text" name="location" required><br><br>

Date Found:<br>
<input type="date" name="date" required><br><br>

Contact:<br>
<input type="text" name="contact" required><br><br>

Item Image:<br>
<input type="file" name="image" required><br><br>

<input type="submit" name="submit" value="Add Item">

</form>

</body>
</html>