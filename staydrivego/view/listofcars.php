<?php
$msg = $_GET['msg'] ?? '';


if ($msg === 'update_success') {
    echo "<p>Car info edited successfully.</p>";
} else if ($msg === 'update_failed') {
    echo "<p>Car info edit failed.</p>";
}

$message = $_GET['message'] ?? '';


if ($message === 'delete_success') {
    echo "<p>Car info deleted successfully.</p>";
} else if ($message === 'deletion_failed') {
    echo "<p>Car info deletion failed.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include_once('../view/header.php'); ?>

<body>
    <fieldset>
        <legend>Your Car Rentals</legend>
        <ul>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'staydrivego');
            if ($con === false) {
                die("Error: Could not connect. " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM cars";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<strong>Car Model:</strong> " . $row['crmdl'] . "<br>";
                echo "<strong>Location:</strong> " . $row['location'] . "<br>";
                echo "<strong>Price per Day:</strong> $" . $row['prcprd'] . "<br>";
                echo "<strong>Pick up time:</strong> " . $row['pickuptime'] . "<br>";
                echo "<strong>Availability:</strong> " . ($row['availability'] ? "Available" : "Not Available") . "<br>";
                echo "<a href='../view/edit_car.php?id=" . $row['carid'] . "'>Edit</a> | ";
                echo "<a href='../controller/delete_car.php?id=" . $row['carid'] . "'>Delete</a>";
                echo "</li>";
            }

            mysqli_close($con);
            ?>
        </ul>
    </fieldset>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>