<?php
session_start();
require_once '../controller/staff_controller.php';

if (isset($_POST['register']) ){
  //echo 'Data Recieved';


  $firstname = $_POST['fname'];
 

  $midname = $_POST['midname'];
  

  $lastname = $_POST['lname'];
 

  $email = $_SESSION['email'];
 
  $rank = $_POST['rank'];

  $password = $_SESSION['password'];

  $password_2 = $_SESSION['password_2'];
  
  $hashed_password = password_hash('password', PASSWORD_DEFAULT);
  $verify_hashed_password = password_verify('password', $hashed_password);
 
 reg_staff($firstname,$midname, $lastname,$email,$rank,$password);
}


if (isset($_POST['login'])){
foreach ($_SESSION['email'] as $email => $password ){ //&& $_POST['password'])
  $email = $row['email'];
  $password = $row['password'];
  echo 'Successful Log In!';
  login_staff($email,$password);
}

}
else{
  echo 'Unsuccessful Log In!';
}

 ?>
