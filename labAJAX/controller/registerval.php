<?php 
require_once ("../model/personmodel.php");

$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$conPassword= $_REQUEST['conPassword'];





if ($name==''||$phone=='' ||$email==''||$password=='' || $conPassword==''  ) {
    echo 'please fill all fields!';
} 

elseif ($password != $conPassword) {
    echo 'password does not match!';
}
 else 
 {
   $status= register($name,$phone,$email,$password);
   if ($status) {
    header('location:../view/login.php');
   } 
   else {
    echo 'Error';
   }
}

?>




?>