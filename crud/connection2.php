<?php
$conn = mysqli_connect('localhost','root','','db_backend');
if($conn){
    // echo 'connected success...';
}else{
    echo 'not connected..!';
}