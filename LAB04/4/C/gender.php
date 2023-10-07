<?php
    if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        echo $gender;
    }
?>

<<html>
    <head>

        <title>Gender</title>
    </head>


    <body>
        
        <form action="" method="post" enctype="">

        <fieldset style="width: 200px;" >
            <legend>Gender</legend>

            <input type="radio" name="gender" value="Male" <?php if(isset($gender) && $gender == "Male") echo "checked"; ?>>Male
            <input type="radio" name="gender" value="Female" <?php if(isset($gender) && $gender == "Female") echo "checked"; ?>>Female
            <input type="radio" name="gender" value="Other" <?php if(isset($gender) && $gender == "Other") echo "checked"; ?>>Other
            <hr>
            <input type="submit" name="Submit" value="Submit">

        </fieldset>
        <br>
        
         
         

        </form>


    </body>

</html>