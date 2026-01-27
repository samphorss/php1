<?php 
  include 'connection.php';
  if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $delete="DELETE FROM tbl_product WHERE id=$id";
    $ex=$conn->query($delete);
    if($ex){
       header('location: table.php');
    }
  }
?>