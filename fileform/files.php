<?
/* 
//insert, update, delete & select
*/
require_once 'connection.php';

public function get_db_connect(){
    return true;
}
public function get_db_query($sqlquery){
    return true;
}

$check = isset($_POST['fNameile', 'cName', 'rep_name', 'staff_id', 'dName', 'dep_name', 'fileSName', 'recDate', 'appcDate', 'retDate' ]);
 if(!$check){
   echo "Wasn't accepted!";
 }
 else{
     echo "Accepted"
 }
$sql = "INSERT INTO file (filename, company_name, rep_name, staff_id, division_name, department_name, file_status, date_received, date_approved, date_returned) VALUES ('$filename',)";
$sql2 = "SELECT filename, company_name, rep_name, staff_id, division_name, department_name, file_status, date_received, date_approved, date_returned FROM file";
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $delete = " <a href='delete.php?id=". $row['id']. "'>Delete record</a>";
        $update = " <a href='update.php?id=" .$row['id']. "'>Update record</a>";
      echo "<tr><td>".$row["filename"]."</td><td>".$row["company_name"]." ".$row["rep_name"]. " ".$row["staff_id"]. " " .$row["division_name"]" ".$row["department_name"]. " ".$row["file_status"]. " ".$row["date_received"]. " ".$row["date_approved"]. " ".$row["date_returned"]. $delete " ". $update "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>


 