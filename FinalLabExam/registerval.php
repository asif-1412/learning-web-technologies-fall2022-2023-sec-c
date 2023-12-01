<?php
$empname = $_POST["empname"];
$contactno = $_POST["contactno"];
$username = $_POST["username"];
$password = $_POST["password"];

if ($empname == "" || $contactno == "" || $username == "" || $password == "") {
    header('location: addproduct.php?err=null');
} else {
    $con = mysqli_connect('localhost', 'root', '', 'emp');
    $sql = "INSERT INTO empl (empname, contactno, username, password) VALUES ('$empname', '$contactno', '$username', '$password')";
    $status = mysqli_query($con, $sql);
    if ($status) {
        header('location: display.php?message=registration_successful');
    } else {
        echo "Registration Failed!";
    }
}
?>
