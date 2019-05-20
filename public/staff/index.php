<?php require_once('../../private/initialize.php'); ?>

<?php $staff_title = "Staff Menu" ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>


	<div>
		<h2>Main Menu</h2>

		<nav class="mainmenu">

			<li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
			<li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
		</nav>
	</div>



</main>



<?php include(SHARED_PATH . '/staff_footer.php'); ?>