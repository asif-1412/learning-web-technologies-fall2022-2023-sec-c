<?php 

    if(isset($_REQUEST['name'])){
        $name = $_REQUEST['name'];
        echo $name;
       
    }
?>

<html>
    <head>
          <title>Name</title>
    </head>


    <body> 
        <form method="post" action="" enctype="">
           Name: <br> 
             <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" /> <br>

            <input type="submit" name="" value="Submit" />
         <hr>


        </form>


    </body>

</html>