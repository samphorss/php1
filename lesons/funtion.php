<?php
//non-return without parameter
// function mymain(){
//     echo 'welcome to funtion </br>'; 
// }
// mymain();

//non-return wwith parameter
// function show($text){
//     echo $text.'</br>';
// }
// show('php');

//return without parameter
// function sum(){
//     $a=10;
//     $b=5;
//     return $a+$b;
// }
// echo sum()+100,'</br>';

//return with parameter
// function sum1($a,$b){
// return $a+$b;
// }
// echo sum1(10,2);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4 p-4 shadow w-58 bg-info-subtle">
        <h1>Form</h1>
        <form action="data.php" method="post">
            <div class="mb-2">
                <label for="name" class="form-label">username</label>
                <input id="name" name="username" type="text" class="form-control" placeholder="enter ur username...">
            </div>
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="" disabled selected>---other---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">email</label>
                <input type="email" name="email" class="form-control" placeholder="enter ur email">
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-success" name="btnsubmit">Submit</button>
            </div>
        </form>
    </div>


</body>

</html>