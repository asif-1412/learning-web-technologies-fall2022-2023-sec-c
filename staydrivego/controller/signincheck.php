<?php
require_once('../model/db.php');

session_start();

$username = $_POST['Username'];
$password = $_POST['Password'];

if ($username == "" || $password == "") {
    echo "null username/password!";
} else {
    $con = getConnection();
    
    $userSql = "SELECT * FROM signin_info WHERE username='{$username}' AND password='{$password}' AND user_type='user'";
    $userResult = mysqli_query($con, $userSql);
    
    $carOwnerSql = "SELECT * FROM signin_info WHERE username='{$username}' AND password='{$password}' AND user_type='car'";
    $carOwnerResult = mysqli_query($con, $carOwnerSql);

if ($userResult && mysqli_num_rows($userResult) > 0) {
    $userData = mysqli_fetch_assoc($userResult);
    $userFirstName = $userData['firstname'];
    $username = $userData['username'];


    $_SESSION['user'] = [
        'firstname' => $userFirstName,
        'username' => $username,
        'user_type' => 'user',
    ];


    setcookie('status', 'true', time() + 3600, '/');
    setcookie('firstname', $userFirstName, time() + 3600, '/');
    setcookie('username', $username, time() + 3600, '/');
    setcookie('user_type', 'user', time() + 3600, '/');
    header("location: userhome.php");
} elseif ($carOwnerResult && mysqli_num_rows($carOwnerResult) > 0) {
    $ownerData = mysqli_fetch_assoc($carOwnerResult);
    $ownerFirstName = $ownerData['firstname'];
    $ownerUsername = $ownerData['username'];

    $_SESSION['user'] = [
        'firstname' => $ownerFirstName,
        'username' => $ownerUsername,
        'user_type' => 'car',
    ];

    setcookie('status', 'true', time() + 3600, '/');
    setcookie('firstname', $ownerFirstName, time() + 3600, '/');
    setcookie('username', $ownerUsername, time() + 3600, '/');
    setcookie('user_type', 'car', time() + 3600, '/');
    header("location: ../view/carownerhome.php");
} else {
    echo "Invalid user!";
}

    mysqli_close($con);
}
