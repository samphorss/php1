<?php

// echo "<h1>Name: nana</h1>";
// echo "<h1>Age: 18</h1>";
// echo "<h1>Gender: Female</h1>";
// echo "<h1>Email: nana2222@gmail.com</h1>";
// echo "<h1>Phone: 012345678</h1>";
// echo "<h1>Address: KPC</h1>";


$id=1;
$name='Ka';
$gender='female';
$address='PP';

// echo $id, '</br>';
// echo '<h1>'.$name.'</h1>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-bordered table-hover table-danger table-striped text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $gender;?></td>
                <td><?php echo $address;?></td>
                <td><button type="button" class="btn btn-info">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
           
        </table>
    </div>
</body>

</html>