<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Manage Pages" ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>

<form action="" method="POST">
	<label for="name">ID</label>
	<input type="text" name="id" required="">
	<label for="name">Position</label>
	<input type="number" name="Position" required="">
	<label for="name">Visible</label>
	<select name="visible" id="">
		<option value="Yes">Yes</option>
		<option value="No">No</option>
	</select>
	<label for="menu_title">Page Title</label>
	<input type="text" name="menu_title" required="">
	<input type="submit" name="create" value="Create">
</form>



</main>



<?php include(SHARED_PATH . "/staff_footer.php"); 