<?php
require_once '../controller/staff_controller.php';

if (isset($_POST['register']) ){
  echo 'data recieved';


  $firstname = $_POST['fname'];
 

  $midname = $_POST['midname'];
  

  $lastname = $_POST['lname'];
 

  $email = $_POST['email'];
 
  $rank = $_POST['rank'];

  $password = $_POST['password'];
  $password_2 = $_POST['password_2'];
  
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  var_dump($hashed_password);
  if(password_verify($password, $hashed_password)) {
    return true;
  }
  else{
    echo 'Wrong Password';
  }
  

  
 
 reg_staff($firstname,$midname, $lastname,$email,$rank,$password);
}



 ?>
