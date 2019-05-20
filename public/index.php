
<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>



	<ul>
		<li><a href=" <?php echo url_for('staff/pages/'); ?> ">Manage Pages</a></li>
		<li><a href=" <?php echo url_for('staff/subjects/'); ?> ">Manage Subjects</a></li>
	</ul>
</main>


<?php include(SHARED_PATH . "/staff_footer.php"); ?>
