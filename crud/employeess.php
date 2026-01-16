<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-3">
   <a href="table.php" class="btn btn-success mb-2">Back Table</a>
    <div class="container mt-4 p-4 shadow w-50 rounded-2">
        <h2 class="text-center">Form</h2>
        <form action="insert.php" method="post">
            <div class="mb-2">
                <label for="" class="form-label">Employee Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Employee Name....">
            </div>
            <div class="mb-2">
                <label for="" class="form-lable">Gender</label>
                <select name="gender" id="" class="form-select">
                    <option value="" disabled selected>....other....</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email....">
            </div>
            <div class="mb-2">
             <label for="" class="form-lable">Positions</label>
             <select name="positions" id="" class="form-select">
                <option value="manager">Manager</option>
                <option value="assistant">Assistant</option>
                <option value="developer">Developer</option>
                <option value="designer">Designer</option>
                <option value="accountant">Accountant</option>
                <option value="hr">HR</option>
                <option value="marketing">Marketing</option>
                <option value="sales">Sales</option>
                <option value="intern">Intern</option>
             </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" placeholder="Enter salary....">
            </div>
            <button name="btnsubmit" class="btn btn-success d-flex mx-auto">Submit</button>
        </form>
    </div>
</body>
</html>