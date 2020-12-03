<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
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

 $login = login_staff($email);
  //var_dump ($login);
  $hashed_pass = $login[0]['password'];
 // var_dump ($hashed_pass);
  //exit;
  $verify_hashedpassword = password_verify($password, $hashed_pass);

  if($verify_hashedpassword){

    $_SESSION['email'] = $login[0]['email'];
    $_SESSION['staff_id'] = $login[0]['id'];



    //header("Location: ../index.php");
   header("Location: ../fileform/form.php");

    // redirect to form

  }
else{
  header("Location: login.php");
}
}


 ?>
