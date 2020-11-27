


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
                <form class="form-horizontal" role="form">
                <form action="../fileform/files.php" method="POST">
                    <h2>MOF Files</h2>
                    <div class="form-group">
                        <label for="fName" class="col-sm-3 control-label">File Name</label>
                        <div class="col-sm-9">
                            <input type="text" name ="fNameile" id="fNameile" placeholder="File Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cName" class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" name ="cName" id="cName" placeholder="Company Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rep_name" class="col-sm-3 control-label">Representative Name </label>
                        <div class="col-sm-9">
                            <input type="text" name="rep_name" id="rep_name" placeholder="Representative Name" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staff_id" class="col-sm-3 control-label">Staff ID </label>
                        <div class="col-sm-9">
                            <input type="staff_id" name ="staff_id" id="staff_id" placeholder="Staff ID" class="form-control">
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="cName" class="col-sm-3 control-label">Division Name</label>
                            <div class="col-sm-9">
                                <input type="text" name ="dName" id="dName" placeholder="Division Name" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rep_name" class="col-sm-3 control-label">Department Name </label>
                            <div class="col-sm-9">
                                <input type="text" name ="dep_name" id="dep_name" placeholder="Department Name" class="form-control" >
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="fileSName" class="col-sm-3 control-label">File Status</label>
                                <div class="col-sm-9">
                                    <input type="text" name ="fileSName" id="fileSName" placeholder="File Status" class="form-control" autofocus>
                                </div>
                            </div>

                         <div class="form-group">
                        <label for="recDate" class="col-sm-3 control-label">Date Received</label>
                        <div class="col-sm-9">
                            <input type="date" name ="recDate" id="recDate" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recDate" class="col-sm-3 control-label">Date Approved</label>
                        <div class="col-sm-9">
                            <input type="date" name ="appcDate" id="appcDate" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recDate" class="col-sm-3 control-label">Date Returned</label>
                        <div class="col-sm-9">
                            <input type="date" name ="retDate" id="retDate" class="form-control">
                        </div>
                    </div>

                            </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                        </div>
                </form> <!-- /form -->
            </div> <!-- ./container -->

  </body>
</html>
