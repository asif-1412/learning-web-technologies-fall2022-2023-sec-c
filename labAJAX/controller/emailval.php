<?php 
     session_start();
     require_once('../model/personmodel.php');
     
     $email = $_POST['email'];
 
         $statuscheck = checkemail($email);
         
         if($statuscheck){


            echo"email available ";
         }
         
         else{

            echo"email not available";
         }
     
?>
