<?php
include('../view/header.php');
require_once('../model/db.php');
if (!isset($_COOKIE['status'])) {
    header('location: ../view/signin.php?error=bad_request');
}

?>


<body>
    <h1>Booking Management</h1>

    <fieldset>
        <legend>Car Booking Requests</legend>
        <ul>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'staydrivego');

            if (!$con) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM bookings";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<strong>User Name:</strong> " . $row['username'] . "<br>";
                echo "<strong>Car ID:</strong> " . $row['carid'] . "<br>";
                echo "<strong>Start Date:</strong> " . $row['startdate'] . "<br>";
                echo "<strong>End Date:</strong> " . $row['enddate'] . "<br>";
                echo "<a href='approvecar.php'>Approve</a>";
                echo "</li>";
            }

            mysqli_close($con);
            ?>
        </ul>
    </fieldset><br><br>

    <fieldset>
        <legend>Car Bookings</legend>
        <ul>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'staydrivego');

            if (!$con) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM bookings";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<strong>User Name:</strong> " . $row['username'] . "<br>";
                echo "<strong>Car ID:</strong> " . $row['carid'] . "<br>";
                echo "<strong>Start Date:</strong> " . $row['startdate'] . "<br>";
                echo "<strong>End Date:</strong> " . $row['enddate'] . "<br>";
                echo "<strong>Status:</strong> " . $row['status'] . "<br>";
                echo "<a href='cancel_booking.php?id=" . $row['bookingid'] . "'>Cancel</a>";
                echo "</li>";
            }

            mysqli_close($con);
            ?>
        </ul>
    </fieldset><br><br>

    <fieldset>
        <legend>Cancellation Requests</legend>
        <ul>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'staydrivego');

            if (!$con) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM cancellations";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<strong>Car ID:</strong> " . $row['carid'] . "<br>";
                echo "<strong>Loacation:</strong> " . $row['location'] . "<br>";
                echo "<strong>Status:</strong> " . $row['status'] . "<br>";
                echo "<a href='approve_cancellation.php?id=" . $row['cnclid'] . "'>Approve</a> | <a href='reject_cancellation.php?id=" . $row['cnclid'] . "'>Reject</a>";
                echo "</li>";
            }

            mysqli_close($con);
            ?>
        </ul>
    </fieldset>


    <?php
    if (isset($_GET['message'])) {
        echo "<p>{$_GET['message']}</p>";
    }
    ?>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>