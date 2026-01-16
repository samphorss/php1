<?php
$products = [
    ["Sunscreen", 240, 9.64, 1594],
    ["Serum", 600, 8.51, 987],
    ["Tonner", 547, 17.40, 153],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="banner">
    <!-- <img src="skin1004.png" alt="" width="100%" height="25%"> -->
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-black" href="#">SHOPPING</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-black " href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="#">Contact</a></li>
        </ul>
    </div>
</nav>


<div class="container-fluid mt-4">
    <div class="row">

        <!-- LEFT COLUMN (VIDEOS) -->
        <div class="col-md-3">
            <div class="card mb-3">
                <!-- <img src="ban1.png" class="card-img-top"> -->
            </div>

            <div class="card">
                <!-- <img src="ban2.png" class="card-img-top"> -->
            </div>
        </div>
<!-- RIETH COLUMN (VIDEOS) -->
        <div class="col-md-9">
            <h3 class="mb-3">Best Selling Products</h3>

            <div class="d-flex mb-3">
                <button class="btn btn-success me-2">Add To Card</button>
                <button class="btn btn-info  me-auto">Product</button>
                <input type="text" class="form-control w-25" placeholder="Search">
            </div>

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Product Name</th>
                        <th>Inventory</th>
                        <th>Unit Price</th>
                        <th>Quantity Sold</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $p): ?>
                    <tr>
                        <td><?= $p[0] ?></td>
                        <td><?= $p[1] ?></td>
                        <td>$<?= number_format($p[2], 2) ?></td>
                        <td><?= $p[3] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>