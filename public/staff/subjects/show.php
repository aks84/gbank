<?php require_once('../../../private/initialize.php'); ?>


<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>
	
	<div class="go_back">
		<a href="<?php echo url_for('/staff/subjects/index.php'); ?>">...Back</a>
	</div>

	<h2><?php $id = $_GET['id'] ?? '1'; ?>
		<?php echo $id ?>
	</h2>

</main>


<?php include(SHARED_PATH . "/staff_footer.php"); 