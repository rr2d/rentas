<?php  
  
  //Email information
  $admin_email = "jmreyesm@me.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $comment = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$phone", "Nombre: "." ".$name."     
  "."Mensaje: "." ".$comment,"From: ".$email);
 
header('Location: index.html#contact');

  ?>
  
 <!DOCTYPE html>

