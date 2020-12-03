<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "../config/connection.php";

class Staff extends Connection
{
function register_staff($firstname,$lastname,$email,$rank,$password){

$query = " INSERT INTO stafff(`firstname`,`lastname`,`email`,`rank`,`password`) VALUES('$firstname','$lastname','$email','$rank','$password')";

return $this->db_query($query);


}

function login_staff($email){

  $query = "SELECT * FROM stafff WHERE email= '$email'";

  return $this->db_query($query);


}



}


 ?>
