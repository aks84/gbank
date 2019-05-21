<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Manage Pages" ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>

	<form action="" method="POST">

		<label for="title">Page Title</label>
		<input type="text" name="title" required="">

		<label for="subject_id">Subjects</label>
		<select name="subject_id" id="">
			<?php $titles = $db->query("SELECT * FROM subjects"); 
			while ($title = $titles->fetch_assoc()) {?>
				<option name="subject_id" value="<?php echo $title['id']; ?>">
					<?php echo $title['title']; ?>
				</option>
			<?php } ?>
		</select>
		<label for="name">Visible</label>

		<select name="visible" id="">
			<option value="1">Yes</option>
			<option value="0">No</option>
		</select>

		<label for="name">Position</label>
		<input type="text" name="position" required="">

		<input type="submit" name="create_page" value="Create">

	</form>
	<?php  

	if (isset($_POST["create_page"])) {
		$position = $_POST['position'];
		$visible = $_POST['visible'];
		$title = $_POST['title'];
		$subject_id = $_POST['subject_id'];

		$inserted = $db->query("INSERT INTO pages (position, visible, title, subject_id) VALUES('$position', '$visible', '$title', '$subject_id')");

	
}


?>
</main>



<?php include(SHARED_PATH . "/staff_footer.php"); 