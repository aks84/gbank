<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Show Subject" ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>
	
	<div class="go_back">
		<a href="<?php echo url_for('/staff/subjects/index.php'); ?>">&#60;&#60; Back to subjects</a>
	</div>

	<h2><?php $id = $_GET['id'] ?? '1'; ?>
		<?php echo h($id )?>
	</h2>

</main>


<?php include(SHARED_PATH . "/staff_footer.php"); 