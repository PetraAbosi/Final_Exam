<?php
session_start();
require "../controller/file_controller.php";

if (empty($_SESSION['staff_id'])){
   header("Location: ../log_in/login.php");
}


include_once "errors.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Dashboard</title>
</head>
<body>



<div class="container mt-5">
<h2> <?= $_SESSION['firstname']?>'s Dashboard </h2>
</div>
<div class="container">
<h5 style="color:green;">Total number of files : <?= fileCount() ?></h5> 
</div>
<div class="card-columns mt-5 col-md-12 container center">
  <div class="card bg-primary">
    <div class="card-body text-center">
    <a href='form.php'>
      <p class="card-text"style='color:white;'>CREATE NEW</p>

    </a>
    </div>
  </div>
  <div class="card bg-warning">
    <div class="card-body text-center">

    <a href='listfiles.php'>
      <p class="card-text" style='color:white;'>LIST ALL</p>

    </a>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body text-center">
    <a href='listfiles.php'>
      <p class="card-text" style='color:white;'>UPDATE </p>

    </a>
    </div>
  </div>
  <div class="card bg-danger">
    <div class="card-body text-center">

    <a href='listfiles.php'>
      <p class="card-text" style='color:white;'>DELETE</p>
    </a>
    </div>
  </div>
 
 
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>