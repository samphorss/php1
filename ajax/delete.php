<?php
require 'conn.php';
$id=$_POST['id'];
$delete="DELETE FROM tbl_students WHERE id='$id'";
$ex=mysqli_query($conn,$delete);
echo $id;
?>