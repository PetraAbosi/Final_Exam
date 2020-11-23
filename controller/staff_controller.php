<?php
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

function login_staff($email,$password){
  $login_staff = new Staff();

  $login = $login_staff->login_staff($email,$password);

  if($login){
    return true;
  }
  else{
      return false;
  }

}
?>
