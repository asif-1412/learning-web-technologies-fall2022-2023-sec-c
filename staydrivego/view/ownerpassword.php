<?php


require_once('../model/ownermodel.php');

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
    <section style="display: flex; justify-content: center;">
        <div style="width: 450px;display: flex;height: auto;">
            <fieldset style="width: 100%;">
            <form action="../controller/ownerchangepasswordcheck.php" method="post" enctype="">
            <table>
                    <tr>
                        <td>
                            Current Password:
                        </td>
                        <td>
                            <input type="password" name="Current" value="">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            New Password:
                        </td>
                        <td>
                            <input type="password" name="New" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm New Password:
                        </td>
                        <td>
                            <input type="password" name="Confirm" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="../view/carowneraccount.php"><input type="submit" value="Save"></a>
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