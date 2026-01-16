<?php
include 'connection2.php';
$id = $_GET['id'];
$select = "SELECT * FROM tbl_employees WHERE id='$id' ";
$execute = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($execute);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Employee</title>
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg rounded-4 w-100" style="max-width: 520px;">
        
        <div class="card-header bg-primary text-dark text-center rounded-top-4">
            <h4 class="mb-0">Edit Employee</h4>
        </div>

        <div class="card-body p-4">
            <form action="edit.php" method="post">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control"
                           value="<?php echo $row['name']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="Male" <?php if ($row['gender']=='male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if ($row['gender']=='female') echo 'selected'; ?>>Female</option>
                    </select>
                </div>

               

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?php echo $row['email']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Positions</label>
                    <input type="text" name="position" class="form-control"
                           value="<?php echo $row['positions']; ?>">
                </div>

                <div class="mb-4">
                    <label class="form-label">Salary</label>
                    <input type="number" name="salary" class="form-control"
                           value="<?php echo $row['salary']; ?>">
                </div>

                <div class="d-grid gap-2">
                    <button name="btnupdate" type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <!-- <a href="table.php" class="btn btn-outline-secondary">
                        Cancel
                    </a> -->
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>