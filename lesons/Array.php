<?php
// $user=['nana','bopha',13,14.5,false,true];

// for($i=0;$i<count($user);$i++){
//     echo $user[$i].'</br>';
// }

// foreach($user as $u ){
//     echo $u.'</br>';
// }

// $a = array();
// $a[0][0] = "sok";
// $a[0][1] = "vanna";
// $a[1][0] = "kiki";
// $a[1][1] = "pisey";

// foreach($a as $e1){
//     foreach($e1 as $e2){
//         echo "$e2\n";
//     }
// }


$user=[
    [
        'id' => 1,
        'name' => 'vanna',
        'gender' => 'female'
    ],
    [
        'id' => 2,
        'name' => 'vanda',
        'gender' => 'male'
    ],
    [
        'id' => 3,
        'name' => 'vandy',
        'gender' => 'male'
    ],
];
// foreach($user as $u1){
//     foreach($u1 as $u2){
//         echo $u2.'</br>';
//     }
// }
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
    <div class="container">
        <table class="table table-hover w-50 mx-auto mt-5 text-center table-bordered">
            <tr>
                <th>ID</th>
                 <th>Name</th>
                  <th>Gender</th>
            </tr>

            <tr>
                <?php foreach($user as $u){?>
                    <tr>
                        <td><?php echo $u['id'];?></td>
                        <td><?php echo $u['name'];?></td>
                        <td><?php echo $u['gender'];?></td>
                    </tr>
                    <?php } ?>
            </tr>
        </table>
    </div>
</body>
</html>