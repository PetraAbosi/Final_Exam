<?php

session_start();
require "../controller/file_controller.php";

if (isset($_GET['deleteId'])) {
  $id = $_GET['deleteId'];
  $is_del = deleteOne($id);

  if ($is_del) {
    echo " file deleted!";
    exit;
  }else {
    echo " error deleting file";
  }
}

// if (isset($_GET['updateId'])) {
//
// }


 ?>
