<?php

require_once '../model/file_class.php';

function create($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status,$file_status, $date_received, $date_approved, $date_returned){

  $insert = (new File())->create($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status,$file_status, $date_received, $date_approved, $date_returned);

  if ($insert) {
    return true;
  }else{
    return false;
  }
}




function readAll(){
  $check = (new File())->readAll();

  if ($check) {
    return true;
  }else {
    return false;
  }
}


function readOne($id){
    $check = (new File())->readOne($id);

    if ($check) {
      return true;
    }else {
      return false;
    }
}



function updateOne($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status,$file_status, $date_received, $date_approved, $date_returned,$id){
  $heck  = (new File())->updateOne($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status,$file_status, $date_received, $date_approved, $date_returned,$id);
  if ($check) {
    return true;
  }else {
    return false;
  }
}



function deleteOne($id){
  $check = (new File())->deleteOne($id);

  if ($check) {
    return true;
  }else {
    return false;
  }
}
