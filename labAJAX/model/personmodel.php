<?php 
require_once('../model/db.php');




function register($name,$phone,$email,$password)
  {
      $con= getConnection();
      
      $sql= "INSERT INTO persons (name,phone,email,password) VALUES('{$name}','{$phone}','{$email}','{$password}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }

function checkemail($email)
{
    $con= getConnection();
      
    $Sql1="SELECT * FROM persons WHERE email='{$email}'";
    
    $result= mysqli_query($con, $Sql1);
    $cnt=mysqli_num_rows($result);
    if($cnt==1)
    {

        return false;
    }
    else{
        return true;
    }

}
function signinUser($email, $password)
{
   
    $con = getConnection();
    $sql = "SELECT * FROM persons WHERE email='{$email}' AND password='{$password}'";
    
    $result = mysqli_query($con, $sql);
 
    $count = mysqli_num_rows($result);

    if ($count>0) {
        $user = mysqli_fetch_assoc($result);

        if ($count>0) 
        {
        $personname= $user["name"];
        $personphone= $user["phone"];
        $personemail = $user["email"];
        $_SESSION["name"] =$personname;
        $_SESSION["phone"]=$personphone;
        $_SESSION["email"] =$personemail;

        }
        return true;
    } else {
        return false;
    }
}


?>