<?php include_once('../model/ownermodel.php');
session_start();
$con = getConnection(); 

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$username = isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : '';


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
    <title>Header</title>
</head>

<body>
    <header>
        <section style="display: flex;">
            <div style="width: 40%;">
                 <h3 style="font-family: fantasy;">StayDriveGo.com</h3> 
            </div>
            <div style="width: 60%; text-align: right;">
                <a href="../view/carownerhome.php">Home</a>|
                Logged in as <a href="../view/carowneraccount.php"><?php echo  $username ?></a> |
                <a href="../controller/logout.php">Logout</a>
            </div>
        </section>
    </header>
</body>

</html>
