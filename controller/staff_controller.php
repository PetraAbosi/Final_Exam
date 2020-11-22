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


?>
