<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4 p-4 w-58 shadow ">
        <form action=""​ method="post">
            <div class="mb-2">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="enter your email...">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="input your password...">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Repeat Password</label>
                <input type="password" name="repeatpassword" class="form-control" placeholder="Repeat your password...">
            </div>
            <div class="  p-3">
                <p>By creating an account you agree to our <a href="">Terme & Privacy</a>.</p>

            </div>
            <div class="mb-2 text-center d-flex justify-content-center">
                <button class="btn btn-success w-25" name="btnregister">Register</button>

            </div>
           
        </form>
         <?php
            $email = $password = $repeatpassword = '';
            if (isset($_POST['btnregister'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $repeatpassword = $_POST['repeatpassword'];

                if ($password !== $repeatpassword) {
                    echo '<script>alert("Password do not match");</script>';
                    exit;
                }else{
                     echo '<script>alert("data submitted successfylly!");</script>';
                }
               
            }
            ?>

            <div class=" text-center p-3">
                <p>Already have an accout? <a href="">Sign In</a>.</p>

            </div>

            <table class="table text-center table-hover mt-4 ">
                <thead class="table-dark">
                    <tr>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Repeat Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $email ?></td>
                        <td><?= $password ?></td>
                        <td><?= $repeatpassword ?></td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>

</html>