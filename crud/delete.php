<?php 
 include 'connection2.php';
 if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $delete="DELETE FROM tbl_employees WHERE id='$id'";
    $result=$conn->query($delete);
    if($result){
        header('location: table.php');
    }
 }
?>