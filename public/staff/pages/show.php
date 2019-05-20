<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Manage Pages" ?>



<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>

	<div class="go_back">
		<a href="<?php echo url_for('/staff/pages/index.php'); ?>">&#60;&#60; Back to pages</a>
	</div>
	
<?php $id = $_GET['id']; ?>

<?php echo $id ?>


</main>


<?php include(SHARED_PATH . "/staff_footer.php"); 