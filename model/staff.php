<?php
require_once "../config/connection.php";

class Staff extends Connection
{
function register_staff($firstname,$lastname,$email,$rank,$password){

$query = " INSERT INTO staff(`firstname`,`lastname`,`email`,`rank`,`password`) VALUES('$firstname','$lastname','$email','$rank','$password')";

return $this->db_query($query);


}

function login_staff($email,$password){

  $query = "SELECT * FROM staff WHERE email= '$email' and password = '$password' ";

  return $this->db_query($query);


}



}


 ?>
