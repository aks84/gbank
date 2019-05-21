<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Manage Pages" ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>

	<form action="" method="POST">
		<label for="position">Position</label>
		<input type="number" name="position" id="">
		<label for="visible">Visible</label>
		<select name="visible" id="">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<label for="menu_title">Subject Title</label>
		<input type="text" name="menu_title" required="">
		<input type="submit" name="create_subject" value="Create">
	</form>

</main>

<?php 
	if (isset($_POST["create_subject"])) {
		$position = $_POST['position'];
		$visible = $_POST['visible'];
		$subject_title = $_POST['menu_title'];

		$db->query("INSERT INTO pages (position, visible, title) VALUES($position, $visible, $subject_title)");
	}

 ?>



<?php include(SHARED_PATH . "/staff_footer.php"); 