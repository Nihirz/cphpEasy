<?php

include 'conn.php';
extract($_GET);
$query = "DELETE FROM USER WHERE id='$id'";
$result = mysqli_query($conn,$query);
header('location:display.php');
?>