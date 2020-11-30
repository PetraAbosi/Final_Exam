<?php
$sql = "DELETE FROM info WHERE id = $id";
$query = mysqli_query($conn, $sql);

if($query){
    echo "Successful";
}
else{
    echo "Failed";
}
?>