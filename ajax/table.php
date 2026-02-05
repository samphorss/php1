<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5 p-4 shadow rounded-3">
        <!-- Button trigger modal -->
        <button type="button" id="add" class="btn btn-primary float-end m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +Add Student
        </button>
       
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conn.php';
                $select = "SELECT * FROM tbl_students";
                $ex = mysqli_query($conn, $select);
                while ($row = mysqli_fetch_assoc($ex)) {
                    echo '
                  <tr>
                   <td>' . $row['id'] . '</td>
                   <td>' . $row['name'] . '</td>
                   <td>' . $row['gender'] . '</td>
                   <td>
                       <img src=" ' . $row['profile'] . ' " width="40px" height="40px" class="rounded-circle" alt="">
                   </td>
                   <td>
                       <button id="delete" class="btn btn-outline-danger">Delete</button>
                        <button class="btn btn-outline-warning edit-btn" data-bs-dismiss="modal" >Edit</button>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="mb-2">
                                    <label for="" class="form-control">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your name...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-control">Gender</label>
                                    <select name="gender" class="form-control" id="gender">
                                        <option value="">---other---</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-control">Profile</label>
                                    <input type="file" id="file" name="file" class="form-control" placeholder="Enter your name...">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="save" class="btn btn-primary" data-bs-dismiss="modal">Add</button>
                            <button type="button" id="update" class="btn btn-success" data-bs-dismiss="modal">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#save').click(function() {
            const username = $('#username').val()
            const gender = $('#gender').val()
            const file = $('#file')[0].files[0]
            const imgurl = URL.createObjectURL(file);

            let formdata = new FormData()
            formdata.append('username', username)
            formdata.append('gender', gender)
            formdata.append('file', file)
            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#form').trigger('reset');
                    $('tbody').append(`
                <tr>
                   <td>${response}</td>
                   <td>${username}</td>
                   <td>${gender}</td>
                   <td>
                       <img src="${imgurl}" width="40px" height="40px" class="rounded-circle" alt="">
                   </td>
                   <td>
                       <button id="delete" class="btn btn-outline-danger">Delete</button>
                        <button id="edit" class="btn btn-outline-warning ">Edit</button>
                   </td>
                </tr>   
                `);
                }
            })
        })
    })
    $('#add').click(function() {
            $('#save').show()
            $('#update').hide()
            $('#exampleModalLabel').text('Add Student')
            $('#form').attr('action', 'insert.php')
            $('#form').trigger('reset')
            $('#image').attr('src', 'https://i.pinimg.com/originals/b6/a6/d5/b6a6d50de7eb36065b98ebd254d46cd5.jpg')
        })
    $(document).on('click', '.edit-btn', function() {
        $('#save').hide();
        $('#update').show();
        $('#exampleModal').modal('show');
        const row = $(this).closest('tr');

        $('#id').val(row.find('td:eq(0)').text().trim());
        $('#username').val(row.find('td:eq(1)').text().trim());
        $('#gender').val(row.find('td:eq(2)').text().trim());

        $('#update').data('row', row);
        $('#exampleModalLabel').text('Update Student');
        $('#exampleModal').modal('show');
    });

    // $('#add').click(function() {
    //     $('#save').show()
    //     $('#update').hide()
    //     const row = $(this).closest('tr');

    //     const id = row.find('td:eq(0)').text().trim();
    //     const username = row.find('td:eq(1)').text().trim();
    //     const gender = row.find('td:eq(2)').text().trim();
    //     const imgSrc = row.find('td:eq(3) img').attr('src');

    //     $('#username').val(username);
    //     $('#gender').val(gender);
    //     $('#img').attr('src', imgSrc);

    //     $('#update').data('row', row);
    //     $('#update').data('id', id);
    // })
    // $('#update').click(function() {
    //     const row = $(this).data('row');
    //     const id = $(this).data('id');

    //     const username = $('#username').val();
    //     const gender = $('#gender').val();
    //     const file = $('#file')[0].files[0];

    //     let formData = new FormData();
    //     formData.append('id', id);
    //     formData.append('username', username);
    //     formData.append('gender', gender);

    //     if (file) {
    //         formData.append('file', file);
    //     }
    // })
    // $.ajax({
    //     url: "update.php",
    //     method: "POST",
    //     data: formData,
    //     contentType: false,
    //     processData: false,
    //     success: function() {
    //         row.find('td:eq(1)').text(username);
    //         row.find('td:eq(2)').text(gender);

    //         if (file) {
    //             row.find('td:eq(3) img').attr('src', URL.createObjectURL(file));
    //         }
    //         alert('Update success');
    //     }
    // });
    
    $('#update').click(function() {
        const row = $(this).data('row');
        $('#save').hide();
    $('#update').show();

    $('#exampleModalLabel').text('Update Student');
        let formData = new FormData();
        formData.append('id', $('#id').val());
        formData.append('name', $('#username').val()); 
        formData.append('gender', $('#gender').val());

        const file = $('#file')[0].files[0];
        if (file) {
            formData.append('profile', file);
        }

        $.ajax({
            url: 'update.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function() {
                row.find('td:eq(1)').text($('#username').val());
                row.find('td:eq(2)').text($('#gender').val());

                if (file) {
                    row.find('td:eq(3) img')
                        .attr('src', URL.createObjectURL(file));
                }

                $('#form').trigger('reset');
                alert('Update successful');
            }
        });
    });
    $(document).on('click', '#delete', function() {
        if (!confirm("Are you sure?")) return
        const row = $(this).closest('tr');
        const id = row.find('td:first').text().trim()

        const formdata = new FormData()
        formdata.append('id', id)
        $.ajax({
            url: 'delete.php',
            method: 'POST',
            data: {
                id
            },
            success: function(res) {
                row.remove()
            }
        })
    })
</script>