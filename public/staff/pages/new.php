<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Manage Pages" ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>

	<form action="" method="POST">
		<label for="name">Position</label>
		<input type="number" name="position" required="">
		<label for="name">Visible</label>
		<select name="visible" id="">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<label for="menu_title">Page Title</label>
		<input type="text" name="menu_title" required="">
		<input type="submit" name="create_page" value="Create">
	</form>
	<?php  

	if (isset($_POST["create_page"])) {
		$position = $_POST['position'];
		$visible = $_POST['visible'];
		$page_title = $_POST['menu_title'];

		$db->query("INSERT INTO pages (position, visible, title) VALUES($position, $visible, $page_title)");
	}



	?>
</main>



<?php include(SHARED_PATH . "/staff_footer.php"); 