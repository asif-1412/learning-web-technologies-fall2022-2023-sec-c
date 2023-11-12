<?php
require_once('../model/ownermodel.php');
//session_start();
//print_r($_SESSION);
if (!isset($_COOKIE['status'])) {
    header('location: ../view/signin.php?error=bad_request');
}

$con = getConnection();

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$username = isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : '';

//echo "Debug - username: " . $username . "<br>";

$query = "SELECT username FROM signin_info WHERE username = '$username'";
$result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $username = isset($row['username']) ? $row['username'] : '';
} else {
    $username = '';
    echo "Debug - Query Error: " . mysqli_error($con) . "<br>";
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once('../view/header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('../view/carownermenu.php') ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <H1>Welcome to StayDriveGo</H1>
                <?php echo "Logged in as " . $username ?>
            </fieldset>
        </div>
    </section>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>