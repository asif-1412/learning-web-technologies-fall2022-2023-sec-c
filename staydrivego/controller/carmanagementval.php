<?php
require_once('../model/db.php');
    $carModel = $_POST['crmodel'];
    $location = $_POST['location'];
    $pricePerDay = $_POST['prcprd'];
    $pickupTime = $_POST['pickuptime'];
    $availability = isset($_POST['availability']) ? 1 : 0;

    if (validateFormInputs($carModel, $location, $pricePerDay, $pickupTime)) {
        $con = getConnection();

        $sql = "INSERT INTO cars (crmdl, location, prcprd, pickuptime, availability) VALUES ('$carModel', '$location', $pricePerDay, $pickupTime, $availability)";

        if (mysqli_query($con, $sql)) {
            $message = "Car rental listing added successfully.";
        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        mysqli_close($con);

        header("Location: ../view/carmanagement.php?message=" . $message);
    } else {
        header("Location: ../view/carmanagement.php?error=invalid_input");
    }
 

function validateFormInputs($carModel, $location, $pricePerDay, $pickupTime) {
    if (empty($carModel) || empty($location) || empty($pricePerDay) || empty($pickupTime)) {
        return false;
    }

    return true;
}
?>
