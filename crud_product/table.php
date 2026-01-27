<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-4 p-5 shadow rounded-3">
        <!-- Button trigger modal -->
        <button type="button" id="add" class="btn btn-outline-dark float-end mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + Add Product
        </button>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'connection.php';
                $select = "SELECT * FROM tbl_product ";
                $ex = mysqli_query($conn, $select);
                while ($row = mysqli_fetch_assoc($ex)) {
                    echo '
                       <tr>
                           <td>' . $row['id'] . '</td>
                           <td>' . $row['pro_name'] . '</td>
                           <td>' . $row['qty'] . '</td>
                           <td>' . $row['price'] . '</td>
                           <td>' . $row['total'] . '</td>
                           <td>
                                <img id="img" src="' . $row['image'] . ' "  width="35" class="rounded-circle" alt="">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="id" value="' . $row['id'] . '">
                                        <button name="delete" class="btn btn-outline-danger " onclick="return confirm(\'Are you sure you want to delete ?\')">Delete</button>
                                    </form>
                                    <button class="btn btn-outline-warning edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                </div>
                            </td>
                       </tr>
                       ';
                }
                ?>
            </tbody>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form" action="insert.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="mb-2">
                                    <label for="pro_name" class="form-label">pro_name</label>
                                    <input type="text" id="pro_name" name="pro_name" class="form-control">
                                </div>

                                <div class="mb-2">
                                    <label for="qty" class="form-label">qty</label>
                                    <input type="number" id="qty" name="qty" class="form-control">
                                </div>

                                <div class="mb-2">
                                    <label for="price" class="form-label">price</label>
                                    <input type="number" id="price"  name="price" class="form-control">
                                </div>

                                <div class="mb-2">
                                    <label for="" class="form-label">image</label> <br>
                                    <img id="image" src="https://i.pinimg.com/originals/b6/a6/d5/b6a6d50de7eb36065b98ebd254d46cd5.jpg" width="110px" height="113px" class="rounded-circle" alt="">
                                    <input type="file" id="file" name="file" class="form-control">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="save" name="btnsubmit" class="btn btn-primary">Save</button>
                            <button type="submit" id="update" name="update" class="btn btn-warning">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#file').hide()
        $('#image').click(function() {
            $('#file').click()
        })
        $('#file').change(function() {
            let file = this.files[0];
            if (file) {
                let image = URL.createObjectURL(file)
                $('#image').attr('src', image)
            }
        })
        $('#add').click(function() {
            $('#save').show()
            $('#update').hide()
            $('#exampleModalLabel').text('Add Product')
            $('#form').attr('action', 'insert.php')
            $('#form').trigger('reset')
            $('#image').attr('src', 'https://i.pinimg.com/originals/b6/a6/d5/b6a6d50de7eb36065b98ebd254d46cd5.jpg')
        })
        $(document).on('click','.edit-btn', function(){
            $('#save').hide()
            $('#update').show()
            $('#exampleModalLabel').text('Edit Product')
            $('#form').attr('action','update.php')
            const row = $(this).closest('tr');
            const id = row.find('td:eq(0)').text().trim()
            const pro_name = row.find('td:eq(1)').text().trim()
            const qty = row.find('td:eq(2)').text().trim()
            const price = row.find('td:eq(3)').text().trim()
            const image = row.find('img').attr('src')


            $('#id').val(id)
            $('#pro_name').val(pro_name)
            $('#qty').val(qty)
            $('#price').val(price)
            $('#image').attr('src', image)

        })
    })
</script>