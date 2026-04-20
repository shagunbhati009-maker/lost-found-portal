<?php

session_start();

if(!isset($_SESSION['user']))
{
header("Location: login.php");
}

include("includes/db.php");

if(isset($_GET['id']) && isset($_GET['type']))
{
    $id = $_GET['id'];
    $type = $_GET['type'];

    if($type == "lost")
    {
        $query = "DELETE FROM lost_items WHERE id=$id";
    }
    else if($type == "found")
    {
        $query = "DELETE FROM found_items WHERE id=$id";
    }

    mysqli_query($conn,$query);

}

header("Location: search.php");

?>