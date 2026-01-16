<?php
include 'connection2.php';
if(isset($_POST['btnsubmit'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $positions=$_POST['positions'];
    $salary=$_POST['salary'];
    $insert="INSERT INTO tbl_employees (name,gender,email,positions,salary)
    VALUE ('$name','$gender','$email','$positions','$salary')";
    $execute=mysqli_query($conn,$insert);
    if($execute){
        header('location: employeess.php');
    }
}