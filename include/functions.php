<?php

// create
function addEmployee($data)
{
    global $connection;
    $sql = "INSERT INTO employees(firstname, lastname, date_of_birth, gender, department) values('" . $data['firstname'] . "', '" . $data['lastname'] . "', '" . $data['dob'] . "', '" . $data['gender'] . "', '" . $data['department'] . "')";

    // echo $sql;

    if ($connection->query($sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
