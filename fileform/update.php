<?php
session_start();
require "../controller/file_controller.php";

if(isset($_GET['updateId'])){
$id = $_GET['updateId'];
$one = readOne($id);


$id = $one[0]['id'];
$filename = $one[0]['filename'];
$company_name = $one[0]['company_name'];
$rep_name = $one[0]['rep_name'];
$staff_id = $one[0]['staff_id'];
$division_name = $one[0]['division_name'];
$department_name = $one[0]['department_name'];
$file_status = $one[0]['file_status'];
$date_received = $one[0]['date_received'];
$date_approved = $one[0]['date_approved'];
$date_returned = $one[0]['date_returned'];





}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Form</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="form.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!--Include the above in your HEAD tag-->
  </head>
  <body>

    <div class="container">

                <form action="files.php" method="POST" class="form-horizontal" role="form">
                    <h2>MOF Files</h2>
                    <div class="form-group">
                        <label for="fName" class="col-sm-3 control-label">File Name</label>
                        <div class="col-sm-9">
                            <input type="text" name ="fname" id="fNameile" placeholder="File Name" class="form-control" value="<?= $filename ?? '' ?>" autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cName" class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" name ="cname" id="cName" placeholder="Company Name" class="form-control" value="<?= $company_name ?? '' ?>" autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rep_name" class="col-sm-3 control-label">Representative Name </label>
                        <div class="col-sm-9">
                            <input type="text" name="rep_name" id="rep_name" placeholder="Representative Name" class="form-control" value="<?= $rep_name ?? '' ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staff_id" class="col-sm-3 control-label">Staff ID </label>
                        <div class="col-sm-9">
                            <input type="staff_id" name ="staff_id" id="staff_id" placeholder="Staff ID" class="form-control" value="<?= $staff_id ?? '' ?>" required>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="cName" class="col-sm-3 control-label">Division Name</label>
                            <div class="col-sm-9">
                                <input type="text" name ="dname" id="dName" placeholder="Division Name" class="form-control" value="<?= $division_name ?? '' ?>" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rep_name" class="col-sm-3 control-label">Department Name </label>
                            <div class="col-sm-9">
                                <input type="text" name ="dep_name" id="dep_name" placeholder="Department Name" class="form-control" value="<?= $department_name?? '' ?>" required>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="fileSName" class="col-sm-3 control-label">File Status</label>
                                <div class="col-sm-9">
                                    <input type="text" name ="file_status" id="fileSName" placeholder="File Status" class="form-control" value="<?= $file_status ?? '' ?>" autofocus required>
                                </div>
                            </div>

                         <div class="form-group">
                        <label for="recDate" class="col-sm-3 control-label">Date Received</label>
                        <div class="col-sm-9">
                            <input type="date" name ="date_received" id="recDate" class="form-control" value="<?= $date_received?? '' ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recDate" class="col-sm-3 control-label">Date Approved</label>
                        <div class="col-sm-9">
                            <input type="date" name ="date_approved" id="appcDate" class="form-control" value="<?= $date_approved ?? '' ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recDate" class="col-sm-3 control-label">Date Returned</label>
                        <div class="col-sm-9">
                            <input type="date" name ="date_returned" id="retDate" class="form-control" value="<?= $date_returned ?? '' ?>" required>
                            <input type="hidden" name ="id" id="retDate" class="form-control" value="<?= $id ?? '' ?>" required>
                        </div>
                    </div>

                            </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" name=" update-file" class="btn btn-primary btn-block">SUBMIT</button>
                        </div>
                </form> <!-- /form -->
            </div> <!-- ./container -->

  </body>
</html>
