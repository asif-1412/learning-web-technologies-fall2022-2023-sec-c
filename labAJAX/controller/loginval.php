<?php 
     session_start();
     require_once('../model/personmodel.php');
     
     $email = $_POST['email'];
     $password = $_POST['password'];
 
 
     if($email == "" || $password == ""){
         echo "please fill all fields";   
     }else{
         
         $statuscheck = signinUser($email, $password);
         
         if($statuscheck){
             $_SESSION['flag'] = "true";
             header("location: ../view/home.php");
         }
         
         else{
             header("location:../view/register.php") ;
         }
     }
?>