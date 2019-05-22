<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Show Subject" ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>
	
	<div class="go_back">
		<a href="<?php echo url_for('/staff/subjects/index.php'); ?>">&#60;&#60; Back to subjects</a>
	</div>

	<?php $id = $_GET['id'] ?? '1';

	$subjectquery = $db->query("SELECT * FROM subjects WHERE id ='$id' ");


	$subject = $subjectquery->fetch_assoc();

	 ?>

<div class="single_subject">
		<div class="subject_title">
			<h2>Subject Title:  <?php echo $subject['title']; ?> </h2>
		</div>
		<div class="subject_content">
			<dl>
				<dt>
					Subject ID
				</dt>
				<dd>
					<?php echo $subject['id'];  ?>
				</dd>
			</dl>
			<dl>
				<dt>
					Subject Title
				</dt>
				<dd>
					<?php echo $subject['title'];  ?>
				</dd>
			</dl>
			
			<dl>
				<dt>
					Visible
				</dt>
				<dd>
					<?php echo $subject['visible'];  ?>
				</dd>
			</dl>
			<dl>
				<dt>
					Position
				</dt>
				<dd>
					<?php echo $subject['position'];  ?>
				</dd>
			</dl>
			
		</div>

	</div>





		
	

</main>


<?php include(SHARED_PATH . "/staff_footer.php"); 