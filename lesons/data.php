<?php 
    if(isset ($_POST['btnsubmit'])){
        $username = $_POST['username']??'';
        $gender = $_POST['gender']??'';
        $email = $_POST['email']??'';
    }
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
        <div class="container mt-4 p-4 shadow w-58 bg-info-subtle">
            <table class="table text-center table-hover mt-4 ">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody >
            <tr>
                <td><?=$username  ?></td>
                <td><?= $gender ?></td>
                <td><?= $email ?></td>
            </tr>
        
        </tbody>
    <!-- </table> -->

        </div>
    </body>
    </html>