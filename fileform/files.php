<?
session_start();
require "../controller/file_controller.php";




if (isset($_POST['file'])) {
  // code...
// get form details

$filename = $_POST['fname'];
$company_name = $_POST['cname'];

$rep_name = $_POST['rep_name'];
$staff_id = (int) $_POST['staff_id'];
$division_name = $_POST['dname'];
$department_name = $_POST['dep_name'];
$file_status = $_POST['file_status'];
$date_received = $_POST['date_received'];
$date_approved = $_POST['date_approved'];
$date_returned = $_POST['date_returned'];



$in = create($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status, $date_received, $date_approved, $date_returned);


if ($in) {

 
  $_SESSION['file-create'] = "File has been created successfully!";
  header("Location: listfiles.php");
  // code...
}else {
  $_SESSION['file-create-err'] = "Error creating file!";
  header("Location: listfiles.php");
}


}



if (isset($_POST['update-file'])) {
  // code...
// get form details
// echo "success";
// exit;

$filename = $_POST['fname'];
$company_name = $_POST['cname'];

$rep_name = $_POST['rep_name'];
$staff_id = (int) $_POST['staff_id'];
$division_name = $_POST['dname'];
$department_name = $_POST['dep_name'];
$file_status = $_POST['file_status'];
$date_received = $_POST['date_received'];
$date_approved = $_POST['date_approved'];
$date_returned = $_POST['date_returned'];
$id= $_POST['id'];



$in = updateOne($filename,$company_name,$rep_name,$staff_id,$division_name,$department_name,$file_status, $date_received, $date_approved, $date_returned,$id);


if ($in) {

  
  $_SESSION['file-update'] = "File has been updated successfully!";
  header("Location: listfiles.php");
  // code...
}else {
 
  $_SESSION['file-update-err'] = "Error updating file!";
  header("Location: listfiles.php");
}


}

?>
