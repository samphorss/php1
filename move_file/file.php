<?php 
   if(isset($_POST['btnsubmit'])){
    //  if(is_dir('photo')){
    //     mkdir('photo',0777,true);
    //  }
    $file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path="photo/".$file;
    $move=move_uploaded_file($tmp_name,$path);
    if($move){
        header('location: move_file.php');
    }
   }
?>