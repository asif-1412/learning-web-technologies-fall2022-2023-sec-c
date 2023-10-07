<?php 

    if(isset($_REQUEST['email'])){
        $email = $_REQUEST['email'];
        echo $email;
       
    }
?>

<html>
    <head>

        <title>Email</title>
    </head>


    <body>
        
        <form action="" method="post" enctype="">
           Email: <br> 
             <input type="text" name="email" value="" /> <input type="button" name="hint" value="i" title="hint:sample@example.com" /> <br>

            <input type="submit" name="Submit" value="Submit" /> 
            
                 
                 
         <hr>
         

        </form>


    </body>

</html>