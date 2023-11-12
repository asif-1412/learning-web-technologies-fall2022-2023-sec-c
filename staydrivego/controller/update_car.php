<?php

    $carID = $_POST['carid'];
    $carModel = $_POST['crmdl'];
    $location = $_POST['location'];
    $pricePerDay = $_POST['prcprd'];
    $pickupTime = $_POST['pickuptime'];
    $availability = isset($_POST['availability']) ? 1 : 0;

    $con = mysqli_connect('localhost', 'root', '', 'staydrivego');

    if ($con === false) {
        die("Error: Could not connect. " . mysqli_connect_error());
    }

    $sql = "UPDATE cars SET crmdl = '$carModel', location = '$location', prcprd = '$pricePerDay', pickuptime = '$pickupTime', availability = $availability WHERE carid = $carID";

    if (mysqli_query($con, $sql)) {
        header('Location: ../view/listofcars.php?msg=update_success');
    } else {
        header('Location: ../view/listofcars.php?msg=update_failed');
    }

    mysqli_close($con);
