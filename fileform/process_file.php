<?php

session_start();
require "../controller/file_controller.php";

if (isset($_GET['deleteId'])) {
  $id = $_GET['deleteId'];
  $is_del = deleteOne($id);

  if ($is_del) {
    
    $_SESSION['file-del'] = "file deleted successfully!";

    header("Location: listfiles.php");
   
    exit;
  }else {
    $_SESSION['file-del-err'] = "Error deleting file!";
    header("Location: listfiles.php");
  }
}




 ?>
