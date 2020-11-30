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

  echo "success";
  // code...
}else {
  echo "failed";
}


}

?>
