<?php
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
    <title>Change Profile Picture</title>
</head>
<body>
    <?php include_once('../view/header.php');?>
    <section style="display: flex;justify-content: center;">
    <form method="post" action="../controller/changepiccheck.php" enctype="multipart/form-data">
        <fieldset style="width: 350px;">
            <Table>
                <tr>
                    <td>
                        Profile Picture:
                    </td>
                    <td>
                        <input type="file" name="NewProfilePic" accept="image/*">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Change Picture">
                    </td>
                </tr>
            </Table>
        </fieldset>
    </form>
    </section>
    <?php include_once('../view/footerpublic.php');?>
</body>
</html>
