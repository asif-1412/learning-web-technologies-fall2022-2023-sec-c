<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
</head>

<?php include_once('../view/header.php'); ?>

<body>
    <fieldset>
        <legend>Edit Car Details</legend>

        <?php
        $carID = $_GET['id'];
        $con = mysqli_connect('localhost', 'root', '', 'staydrivego');

        if ($con === false) {
            die("Error: Could not connect. " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM cars WHERE carid = $carID";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $car = mysqli_fetch_assoc($result);
        ?>

            <form action="update_car.php" method="POST">
                <input type="hidden" name="carid" value="<?php echo $car['carid']; ?>">
                <label for="crmdl">Car Model:</label>
                <input type="text" id="crmdl" name="crmdl" value="<?php echo $car['crmdl']; ?>"><br><br>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" value="<?php echo $car['location']; ?>"><br><br>

                <label for="prcprd">Price per Day:</label>
                <input type="text" id="prcprd" name="prcprd" value="<?php echo $car['prcprd']; ?>"><br><br>

                <label for="pickuptime">Pick up time:</label>
                <input type="text" id="pickuptime" name="pickuptime" value="<?php echo $car['pickuptime']; ?>"><br><br>

                <label for="availability">Availability:</label>
                <input type="checkbox" id="availability" name="availability" <?php if ($car['availability']) echo "checked"; ?>><br><br>

                <input type="submit" value="Submit">
            </form>

        <?php
        } else {
            echo "Car details not found.";
        }

        mysqli_close($con);
        ?>

    </fieldset>

    <?php include_once('../view/footerpublic.php'); ?>

</body>

</html>