<?php
require_once "../config/connection.php";

class File extends Connection
{

// create a file

public function create($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status,$file_status, $date_received, $date_approved, $date_returned){

$sql = "INSERT INTO file (filename, company_name, rep_name, staff_id, division_name, department_name, file_status, date_received, date_approved, date_returned) VALUES ('$filename','$company_name','$rep_name','$staff_id','$division_name','$department_name','$file_status','$file_status', '$date_received', '$date_approved', '$date_returned')";

return $this->db_query($sql);
}


// read all files
public function readAll(){

  $sql = "SELECT * FROM file";

  return $this->db_query($sql);

}

// read one file

public function readOne($id){

  $sql = "SELECT * FROM file WHERE id = '$id'";

  return $this->db_query($sql);


}
// update a file
public function updateOne($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status,$file_status, $date_received, $date_approved, $date_returned,$id){

  $sql = " UPDATE file SET
                  filename='$filename',
                  company_name= '$company_name',
                  rep_name = '$rep_name',
                  staff_id = '$staff_id',
                  division_name = '$division_name',
                  department_name = '$department_name',
                  file_status = '$file_status',
                  date_received = '$date_received',
                  date_approved = '$date_approved',
                  date_returned = '$date_returned'


                  WHERE id = '$id'

                   ";

}


//  delete a a file
public function deleteOne($id){

  $sql = "DELETE FROM file WHERE id = '$id'";
  return $this->db_query($sql);

}




}





 ?>
