<?php
require_once "../model/db.php";
require_once "../model/ownermodel.php";

session_start();
$conn = getConnection();

if (isset($_FILES['NewProfilePic']) && $_FILES['NewProfilePic']['error'] === UPLOAD_ERR_OK) {
    $imageFileType = pathinfo($_FILES["NewProfilePic"]["name"], PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["NewProfilePic"]["tmp_name"]);

    if ($check !== false) {
        if ($_FILES["NewProfilePic"]["size"] > 5000000) {
            header("Location: ../view/changepp.php?error=Sorry, your file is too large.");
            exit();
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            header("Location: ../view/changepp.php?error=Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            exit();
        }

        $targetDir = "assets/";
        $targetFile = $targetDir . basename($_FILES["NewProfilePic"]["name"]);

        if (move_uploaded_file($_FILES["NewProfilePic"]["tmp_name"], $targetFile)) {
            $newProfilePic = $targetFile;
            $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';

            if (empty($username)) {
                header("Location: ../view/changepp.php?error=Invalid username.");
                exit();
            }

            $status = updateOwnerProfilePic($username, $newProfilePic, $conn);

            if ($status) {
                header('Location: carowneraccount.php');
            } else {
                echo 'Failed to update the profile picture.';
            }
        } else {
            header("Location: ../view/changepp.php?error=Sorry, there was an error uploading your file.");
        }
    } else {
        header("Location: ../view/changepp.php?error=File is not an image.");
    }
} else {
    header("Location: ../view/changepp.php?error=Please select a file.");
}
?>
