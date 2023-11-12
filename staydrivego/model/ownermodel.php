<?php 
    require_once('../model/db.php');
    function ownerSignup($firstname, $lastname, $username, $email, $mobile, $dob, $pp, $gender, $password, $service)
    {
    
        $con = getConnection();
        $sql = "SELECT * FROM ownersinfo where username='{$username}' or email='{$email}'";
        $sql1 = "SELECT * FROM signin_info where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $result1 = mysqli_query($con, $sql1);
        $count =  mysqli_num_rows($result);
        $count1 = mysqli_num_rows($result1);
    
        if ($count == 1 || $count1 == 1) {
            return false;
        } else {
            $sql2 = "INSERT INTO ownersinfo (firstname,lastname,username,email,mobile,dob,pp,gender,password,service) VALUES('{$firstname}','{$lastname}','{$username}' , '{$email}' ,'{$mobile}','{$dob}','{$pp}','{$gender}','{$password}','{$service}')";
            $sql3 = "INSERT INTO signin_info (username,password,user_type) VALUES('{$username}' , '{$password}', '{$service}')";
            $result2 = mysqli_query($con, $sql2);
            $result3 = mysqli_query($con, $sql3);
            if ($result2 && $result3) {
                return true;
            } else {
                return false;
            }
        }
    }
    function signinCarOwner($username, $password)
{
    $usertype = "car";
    $con = getConnection();
    $sql = "SELECT * FROM signin_info WHERE username='{$username}' AND password='{$password}' AND user_type='{$usertype}'";
    $sql1 = "SELECT * FROM ownersinfo WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $userData = mysqli_fetch_assoc($result1);

        if ($userData) {
            
            $userFirstName = $userData['firstname'];
            $username = $userData['username'];
            setcookie('firstname', $userFirstName, time() + 3600, '/');
            setcookie('username', $username, time() + 3600, '/');
        }
        return true;
    } else {
        return false;
    }
}

function getOwnerInfo()
{
    $currentUser = $_COOKIE['username'];
    $con = getConnection();
    $sql = "SELECT * FROM ownersinfo WHERE username='{$currentUser}' ";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}

function editOwnerInfo($firstname, $lastname, $username, $email, $mobile)
{
    $currentUser = $_COOKIE["username"];
    $con = getConnection();
    $sql = "UPDATE ownersinfo SET firstname='{$firstname}', lastname='{$lastname}',username='{$username}',email='{$email}',mobile='{$mobile}' WHERE username='{$currentUser}'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        setcookie('firstname', $firstname, time() + 3600, '/');
        return true;
    } else {
        return false;
    }
}

function changeOwnerPassword($currentpassword, $password)
{
    $currentUser = $_COOKIE["username"];
    $con = getConnection();
    $sql = "SELECT * FROM ownersinfo WHERE username='{$currentUser}' AND password='{$currentpassword}' ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count==1) {
        $sql1 = "UPDATE ownersinfo SET password='{$password}' WHERE username='{$currentUser}'";
        $result1 = mysqli_query($con, $sql1);
            if ($result1) {

                return true;
            } 
        return true;
    } else {
        return false;
    }
}

function updateOwnerProfilePic($username, $newProfilePic, $conn)
{
    $username = mysqli_real_escape_string($conn, $username);
    $newProfilePic = mysqli_real_escape_string($conn, $newProfilePic);
    $query = "UPDATE ownersinfo SET pp = '$newProfilePic' WHERE username = '$username'";
    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
}

?>