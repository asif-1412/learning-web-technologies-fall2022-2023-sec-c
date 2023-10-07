<?php 

    
if(isset($_REQUEST['date'])){
    $date = $_REQUEST['date'];
    echo $date;
   
}
?>

<html>
    <head>

        <title>Date Of Birth</title>
    </head>


    <body>
        
        <form action="" method="post" enctype="">

        <fieldset style="width:100px;" >
            <legend>Date of Birth</legend>

            mm dd yyyy <br>

        <input type="date" name="date" value ="<?php if(isset($date)){echo $date;}?>" />  <br>
        <hr>    

            

        <input type="submit" name="Submit" value="Submit">        

        </fieldset>
        <br>
        </form>


    </body>

</html>