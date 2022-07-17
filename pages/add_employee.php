<?php

require("../include/functions.php");
require('../include/db_connection.php');

//call function
if (isset($_POST['submit'])) {
    // print_r($_POST);
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['dob']) && !empty($_POST['gender']) && !empty($_POST['department'])) {

        // echo "here";
        addEmployee($_POST);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="add_employee.php" method="post" class="mt-5 p-5 border">
            <h2>Add New Employee</h2>
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lname">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>

                <select class="form-select" id="gender" name="gender">
                    <option value="" disabled selected>choose gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="dept" class="form-label">Department</label>

                <select class="form-select" id="dept" name="department">
                    <option value="" disabled selected>choose department</option>
                    <option value="Finance">Finance</option>
                    <option value="Accounting">Accounting</option>
                    <option value="IT">Information Technology</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Employee</button>
            <a href="../index.php" class="btn btn-warning">Back</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>