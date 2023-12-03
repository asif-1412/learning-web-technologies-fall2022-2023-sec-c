<?php

session_start();

    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
  
    echo "<p>name: $name</p>";
    echo "<p>phone: $phone</p>";
    echo "<p>email: $email</p>";

?>
