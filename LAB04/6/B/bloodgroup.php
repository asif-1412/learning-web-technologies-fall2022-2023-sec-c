<?php 

    if(isset($_REQUEST['Group'])){
        $bdgrp = $_REQUEST['Group'];
        echo $bdgrp;
       
    }
?>

<html>
    <head>

        <title>Blood Group</title>
    </head>


    <body>
        
        <fieldset style="width: 150px; border: 0;">
            <form action="" method="post" enctype="">

                Blood Group
                <select name="Group" id=""> 
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                    
                </select> 
                <hr >
                <input type="submit" name="Submit" value="Submit">
        </fieldset>
        
           
        </form>
         

        
    </body>

</html>