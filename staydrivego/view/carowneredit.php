<?php

require_once('../model/ownermodel.php');

$onwersinfo = getOwnerInfo();
if (!isset($_COOKIE['status'])) {
    header('location: ../view/signin.php?error=bad_request');
}
if (isset($_GET['error'])) {
    $errorMessage = $_GET['error'];
    echo "<p style='color: red;'>$errorMessage</p>";
}
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
    <section style="display: flex;justify-content: center;">
        <div style="width: 350px;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <form action="carownereditcheck.php" method="post" enctype="">
                    <table>
                        <tr>
                            <td>
                                Firstname:
                            </td>
                            <td>
                                <input type="text" name="Firstname" value="<?php echo $onwersinfo[0]['firstname']; ?>">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lastname:
                            </td>
                            <td>
                                <input type="text" name="Lastname" value="<?php echo $onwersinfo[0]['lastname']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Username:
                            </td>
                            <td>
                                <input type="text" name="Username" value="<?php echo $onwersinfo[0]['username']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email:
                            </td>
                            <td>
                                <input type="text" name="Email" value="<?php echo $onwersinfo[0]['email']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mobile:
                            </td>
                            <td>
                                <input type="text" name="Mobile" value="<?php echo $onwersinfo[0]['mobile']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date of Birth:
                            </td>
                            <td>
                                <input type="text" name="DOB" value="<?php echo $onwersinfo[0]['dob']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gender:
                            </td>
                            <td>
                                <input type="text" name="Gender" value="<?php echo $onwersinfo[0]['gender']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" value="Save">
                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>
                </form>


            </fieldset>

        </div>
    </section>
    <?php include_once('../view/footerpublic.php'); ?>
</body>

</html>