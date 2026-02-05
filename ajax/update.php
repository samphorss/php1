<?php 
    require 'conn.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        if(!empty($profile=$_FILES['profile']['name'])){
            $tmp_name=$_FILES['profile']['tmp_name'];
            $path='image/'.rand(1,999).'-'.$profile;
            move_uploaded_file($tmp_name,$path);
            $update="UPDATE tbl_students SET name='$name', gender='$gender',
                               profile='$path' WHERE id='$id' ";
        }else{
            $update="UPDATE tbl_students SET name='$name', gender='$gender'
             WHERE id='$id' ";
        }

        $rs=$conn->query($update);
        if($rs){
            echo 'success';
        }
    }
    