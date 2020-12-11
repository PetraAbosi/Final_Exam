<?php if (isset($_SESSION['file-del-err'])): ?>
<div class='alert alert-danger'>

	<?php
	echo $_SESSION['file-del-err'];
	unset($_SESSION['file-del-err']);
	?>

	</div>
<?php endif ?>


<?php if (isset($_SESSION['file-del'])): ?>

      <div class="alert alert-success">
        <?php
        echo $_SESSION['file-del'];
        unset($_SESSION['file-del']);
         ?>

      </div>

<?php endif ?>




<?php if (isset($_SESSION['file-create-err'])): ?>
<div class='alert alert-danger'>

	<?php
	echo $_SESSION['file-create-err'];
	unset($_SESSION['file-create-err']);
	?>

	</div>
<?php endif ?>


<?php if (isset($_SESSION['file-create'])): ?>

      <div class="alert alert-success">
        <?php
        echo $_SESSION['file-create'];
        unset($_SESSION['file-create']);
         ?>

      </div>

<?php endif ?>



<?php if (isset($_SESSION['file-update-err'])): ?>
<div class='alert alert-danger'>

	<?php
	echo $_SESSION['file-update-err'];
	unset($_SESSION['file-update-err']);
	?>

	</div>
<?php endif ?>


<?php if (isset($_SESSION['file-update'])): ?>

      <div class="alert alert-success">
        <?php
        echo $_SESSION['file-update'];
        unset($_SESSION['file-update']);
         ?>

      </div>

<?php endif ?>