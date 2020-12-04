<?php

require_once '../model/file_class.php';

function create($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status, $date_received, $date_approved, $date_returned){

  $insert = (new File())->create($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status, $date_received, $date_approved, $date_returned);

  if ($insert) {
    return true;
  }else{
    return false;
  }
}




function readAll(){

  $arr = array();
  $obj = new File();
  $read = $obj->readAll();
  if ($read) {
      $one_record = $obj->db_fetch();
      $arr[] = $one_record;
  }
  return $arr;

}


function readOne($id){
  $arr = array();
  $obj = new File();
  $read = $obj->readOne($id);
  if ($read) {
      $one_record = $obj->db_fetch();
      $arr[] = $one_record;
  }
  return $arr;
}



function updateOne($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status, $date_received, $date_approved, $date_returned,$id){
  $check  = (new File())->updateOne($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status,$date_received, $date_approved, $date_returned,$id);
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
