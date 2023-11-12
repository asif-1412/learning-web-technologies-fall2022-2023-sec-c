<?php
if (!isset($_COOKIE['status'])) {
    header('location: ../view/signin.php?error=bad_request');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carownermenu</title>
</head>

<?php include_once('header.php'); ?>
<body>
    <fieldset style="width: 98%;">
        <ul>
            <li><a href="../view/carmanagement.php">Manage Cars</a></li>
            <li><a href="../view/carbooking.php">Manage Car Bookings</a></li>
            <li><a href="../view/carownerhome.php">Home</a></li>
            <li><a href="">Notification</a></li>
            <li><a href="">History</a></li>
            <li><a href="../view/logout.php">Logout</a></li>
        </ul>
    </fieldset>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>