<?php
session_start();
require_once "../model/ownermodel.php";

$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];
$dob = $_POST['DOB'];
$gender = (isset($_POST['Gender'])) ? $_POST['Gender'] : '';



if ($firstname == '' || $lastname == '' || $username == '' || $email == '' || $mobile == '' || $dob == '' || $gender == '') 
{
    header("Location: carowneredit.php?error=All Fields must be filled.");
} elseif (!ctype_upper($firstname[0]) || !ctype_alpha($firstname)) {
    header("Location: carowneredit.php?error=First Name should start with a capital letter and contain only alphabetic characters.");
} elseif (!ctype_upper($lastname[0]) || !ctype_alpha($lastname)) {
    header("Location: carowneredit.php?error=Last Name should start with a capital letter and contain only alphabetic characters.");
} elseif (strlen($username) < 6 || strpbrk($username, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`') !== false || strpbrk($username, ' ') !== false) {
    header("Location: carowneredit.php?error=Username should be at least 6 characters long and contain only lowercase letters, numbers, and underscores.");
} elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
    header("Location: carowneredit.php?error=Email should include @ and . symbols.");
} elseif (strlen($mobile) !== 11 || !ctype_digit($mobile) || !in_array(substr($mobile, 0, 3), ['017', '016', '018', '015', '019', '013'])) {
    header("Location: carowneredit.php?error=Invalid mobile number. It should be 11 digits long, contain only digits, and start with 017, 016, 018, 015, 019, or 013.");
}  else {
   $status= editOwnerInfo($firstname, $lastname, $username, $email, $mobile,$dob,$gener);
   if ($status) {
    header('location:../view/carowneraccount.php');
   } else {
    echo 'Username or Email Already Taken.';
   }
}
