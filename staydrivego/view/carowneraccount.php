<?php
require_once('../model/ownermodel.php');
if (!isset($_COOKIE['status'])) {
    header('location: signin.php?error=bad_request');
}

$ownersinfo = getOwnerInfo();

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
            <fieldset>
                <ul>
                    <li><a href="../view/carownerhome.php">Home</a></li>
                    <li><a href="../view/carowneraccount.php">Account</a></li>
                    <li><a href="../view/carownerdashboard.php">Dashboard</a></li>
                    <li><a href="">Notification</a></li>
                    <li><a href="">History</a></li>
                    <li><a href="../controller/logout.php">Logout</a></li>
                </ul>
            </fieldset>
        </div>

        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <section style="display:flex;">
                    <div style="width: 30%;display:flex;  height: auto;">
                        <fieldset style="width: 100%; justify-content: center;">
                            <img src="../assets/profilePic.jpg" alt="" height="150px" width="150px"><br>
                            <a href="changepp.php">Change Profile Picture</a>
                        </fieldset>
                    </div>
                    <div style="width: 70%;display: flex;height: auto;  ">
                        <fieldset style="width: 100%;">
                            <?php
                            if ($ownersinfo) {
                            ?>
                                <table>
                                    <tr>
                                        <td>
                                            Firstname:
                                        </td>
                                        <td>
                                            <?php echo $ownersinfo[0]['firstname']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lastname:
                                        </td>
                                        <td>
                                            <?php echo $ownersinfo[0]['lastname']; ?>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>
                                        Username:
                                    </td>
                                    <td>
                                        <?php echo $ownersinfo[0]['username']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Email:
                                    </td>
                                    <td>
                                        <?php echo $ownersinfo[0]['email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mobile:
                                    </td>
                                    <td>
                                        <?php echo $ownersinfo[0]['mobile']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Date of Birth:
                                    </td>
                                    <td>
                                        <?php echo $ownersinfo[0]['dob']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gender:
                                    </td>
                                    <td>
                                        <?php echo $ownersinfo[0]['gender']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../view/carowneredit.php">Edit Profile</a>
                                    </td>
                                    <td>
                                        <a href="../view/ownerpassword.php">Change password</a>
                                    </td>
                                </tr>
                                </table>
                            <?php
                            } else {
                                echo "Owner information not available.";
                            }
                            ?>
                        </fieldset>
                    </div>
                </section>
            </fieldset>
        </div>
    </section>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>