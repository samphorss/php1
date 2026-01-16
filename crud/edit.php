<?php 
include 'connection2.php';
if(isset($_POST['btnupdate'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $positions=$_POST['positions'];
    $salary=$_POST['salary'];
    $edit="UPDATE tbl_employees SET name='$name',
    gender='$gender',email='$email',positions='$positions',salary='$salary'
    WHERE id='$id'
    ";
    $result=$conn->query($edit);
    if($result){
        header('location: table.php');
    }
}


?>