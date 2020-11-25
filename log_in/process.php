<?php

require_once '../controller/staff_controller.php';


if (isset($_POST['register']) ){
  //echo 'Data Recieved';


  $firstname = $_POST['fname'];
 //echo $firstname;

  //$midname = $_POST['midname'];
 // echo $midname;

  $lastname = $_POST['lname'];
// echo $lastname;

  $email = $_POST['email'];
 //echo $email;
  $rank = $_POST['rank'];
//echo $rank;
  $password = $_POST['password'];
//echo $password;
  $password_2 = $_POST['password_2'];
  //echo $password_2;
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  //echo $hashed_password;
 $register_staff = reg_staff($firstname,$lastname,$email,$rank,$hashed_password);



 if(!$register_staff){
   echo 'Unsuccessful';
   exit;
 }
 header('Location:login.php');
}

if (isset($_POST['login']) ){
  $email = $_POST['email'];
  echo $email;

  $password = $_POST['password'];
  echo $password;
  
 $login = loginStaff($email);
  //var_dump ($login);
 
}

 ?>
