<?php
session_start();
require_once '../model/staff.php';


function reg_staff($firstname,$lastname,$email,$rank,$password){
  $staff = new Staff();

  $reg = $staff->register_staff($firstname,$lastname,$email,$rank,$password);

  if($reg){
    return true;
  }else{
      return false;
  }

}

function loginStaff($email,$password){
  $login_staff = new Staff();

  $login = $login_staff->loginStaff($email,$password);

  if($login){
    return true;
  }
  else{
      return false;
  }

}
?>
