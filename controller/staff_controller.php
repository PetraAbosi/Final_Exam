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

function login_staff($email){
  $login_array = array();
  $login_object = new Staff();
  $login_record = $login_object->login_staff($email);
  if ($login_record) {
      $one_record = $login_object->db_fetch();
      $login_array[] = $one_record;
  }
  return $login_array;
}



?>
