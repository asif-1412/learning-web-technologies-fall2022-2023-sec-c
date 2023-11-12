<?php

    if (isset($_GET['id'])) {
        $carID = $_GET['id'];

        $con = mysqli_connect('localhost', 'root', '', 'staydrivego');

        if ($con === false) {
            die("Error: Could not connect. " . mysqli_connect_error());
        }

        $sql = "DELETE FROM cars WHERE carid = $carID";

        if (mysqli_query($con, $sql)) {
            header('Location: ../view/listofcars.php?message=delete_success');
        } else {
            header('Location: ../view/listofcars.php?message=deletion_failed');
        }

        mysqli_close($con);
    } else {
        echo "Invalid car ID";
    }
