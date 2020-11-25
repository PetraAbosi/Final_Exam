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

function loginStaff($email){
  $login_staff = new Staff();

  $login = $login_staff->loginStaff($email);

  if($login){
    return true;
  }
  else{
      return false;
  }

}


?>
