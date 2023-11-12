<?php
require_once "../model/ownermodel.php";
session_start();
$service = (isset($_POST['Service'])) ? $_POST['Service'] : '';
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];
$pp = $_POST['pp'];
$dob = $_POST['DOB'];
$gender = (isset($_POST['Gender'])) ? $_POST['Gender'] : '';
$password = $_POST['Password'];
$conpassword = $_POST['ConPassword'];

if ($firstname == '' || $lastname == '' || $username == '' || $email == '' || $password == '' || $conpassword == '' || $mobile == '' || $dob == '' || $gender == '' || $service == '') 
{
    header("Location: ownersignup.php?error=All Fields must be filled.");
} elseif (!ctype_upper($firstname[0]) || !ctype_alpha($firstname)) {
    header("Location: ownersignup.php?error=First Name should start with a capital letter and contain only alphabetic characters.");
} elseif (!ctype_upper($lastname[0]) || !ctype_alpha($lastname)) {
    header("Location: ownersignup.php?error=Last Name should start with a capital letter and contain only alphabetic characters.");
} elseif (strlen($username) < 6 || strpbrk($username, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`') !== false || strpbrk($username, ' ') !== false) {
    header("Location: ownersignup.php?error=Username should be at least 6 characters long and contain only lowercase letters, numbers, and underscores.");
} elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
    header("Location: ownersignup.php?error=Email should include @ and . symbols.");
} elseif (strlen($mobile) !== 11 || !ctype_digit($mobile) || !in_array(substr($mobile, 0, 3), ['017', '016', '018', '015', '019', '013'])) {
    header("Location: ownersignup.php?error=Invalid mobile number. It should be 11 digits long, contain only digits, and start with 017, 016, 018, 015, 019, or 013.");
} elseif (strlen($password) < 6 || strpbrk($password, '!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`') == false || strpbrk($password, '0123456789') == false || strpbrk($password, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') == false || strpbrk($password, 'abcdefghijklmnopqrstuvwxyz') == false) {
    header("Location: ownersignup.php?error=Password should be at least 6 characters with at least one uppercase letter, one lowercase letter, one special character, and one number.");
} elseif ($password !== $conpassword) {
    header("Location: ownersignup.php?error=Passwords do not match.");
} else {
    $status = ownerSignup($firstname, $lastname, $username, $email, $mobile, $dob, $pp, $gender, $password, $service);
    if ($status) {
        header('location:../view/signin.php');
    } else {
        header("Location: ../view/ownersignup.php?error=Username or Email Already Taken.");
    }
}
